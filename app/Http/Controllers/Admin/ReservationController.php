<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Payment;
use App\Models\PaymentMethode;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with('payment', 'user', 'room')->latest()->paginate(10);

        return view('admin.bookings.index', compact('reservations'));
    }

    public function events()
    {
        $events = [];

        $reservations = Reservation::with(['user', 'room'])->get();
        $reservationsCount = Reservation::count();

        foreach ($reservations as $reservation) {
            $events[] = [
                'title' => $reservation->user->name,
                'statut' => $reservation->statut,
                'start' => $reservation->checkIn,
                'end' => $reservation->checkOut,
            ];
        }

        return view('admin.calender', compact('events', 'reservationsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::all();

        return view('admin.bookings.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        try{
            $room = Room::find($request->room_id);

            if ($room->isAvailable($request->total_children, $request->total_adults, $request->checkIn, $request->checkOut)) {
                $user = User::firstOrCreate(
                    ['email' => $request->email],
                    ['name' => $request->name, 'password' => Hash::make($request->email)]
                );

                $user->phone = $request->phone;
                $user->save();
                $user->roles()->attach([2]);

                if ($request->hasFile('user-image')) {
                    $user->addMediaFromRequest('user-image')->toMediaCollection('profile');
                }

                $reservation = Reservation::create(array_merge($request->validated(), ['user_id' => $user->id, 'ref' => 'admin']));

                $payment = Payment::create([
                    'totalAmount' => $request->totalAmount,
                    'amountPaid' => $request->amountPaid,
                    'reservation_id' => $reservation->id,
                ]);

                PaymentMethode::create([
                    'payment_id' => $payment->id,
                ]);

                $room->update(['room_statut' => 'Booked']);

                return redirect()->route('admin.reservations.index')->with('success', 'Reservation created successfully!');
            }
            else{
                return redirect()->back()->with('error', 'Room is not available')->withInput();
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong Please try again!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $rooms = Room::all();

        return view('admin.bookings.edit', compact( 'rooms', 'reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        try {
            if ($reservation->ref === 'guest') {

                $reservation->statut = $request->statut;
                $reservation->save();

                return redirect()->back()->with('success', 'Statut updated successfully!');
            } else {

                $room = Room::find($request->room_id);
                $reservation->fill($request->all());

                if ($reservation->isDirty(['room_id', 'checkIn', 'checkOut', 'total_children', 'total_adults'])) {
                    if (!$room->isAvailable($request->total_children, $request->total_adults, $request->checkIn, $request->checkOut)) {
                        return redirect()->back()->with('error', 'Room is not available')->withInput();
                    }
                }

                $user = User::where('email', $request->email)->first();
                $user->update(['name' => $request->name, 'phone' => $request->phone]);

                if ($request->hasFile('user-image')) {
                    $user->clearMediaCollection('profile');
                    $user->addMediaFromRequest('user-image')->toMediaCollection('profile');
                }

                $reservation->user_id = $user->id;

                $reservation->update(array_merge($request->validated(), ['user_id' => $user->id]));

                Payment::where('reservation_id', $reservation->id)
                    ->update([
                        'totalAmount' => $request->totalAmount,
                        'amountPaid' => $request->amountPaid,
                        'reservation_id' => $reservation->id,
                    ]);

                $room->update(['room_statut' => $request->room_statut]);

                return redirect()->route('admin.reservations.index')->with('success', 'Reservation updated successfully!');

            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong Please try again!');
        }
    }

    public function filter(Request $request)
    {
        $query = Reservation::with('room', 'user', 'payment');

        if ($request->input('payment_statut')) {
            $query->whereHas('payment', function ($query) use ($request) {
                $query->where('statut', $request->get('payment_statut'));
            });
        }

        if ($request->has('name')) {
            $query->whereHas('user', function ($query) use ($request) {
                $query->where('name', $request->get('name'));
            });
        }

        if ($request->has('period')) {

            $period = $request->period;
            $date = Carbon::now();

            switch ($period) {
                case '24_hours':
                    $date = $date->subDay();
                    break;
                case '7_days':
                    $date = $date->subWeek();
                    break;
                case '30_days':
                    $date = $date->subMonth();
                    break;
            }
            $query->where('created_at', '>=', $date);
        }

        if ($request->has('statut')) {
            $query->where('statut', $request->get('statut'));
        }

        $reservations = $query->latest()->paginate(10);

        return view('admin.bookings.index', compact('reservations'));
    }

    public function search(Request $request)
    {
        $search = $request->get('reservation-search');

        $reservations = Reservation::where('ref', 'like', '%' . $search . '%')
            ->orWhere('statut', 'like', '%' . $search . '%')
            ->orWhere('checkIn', 'like', '%' . $search . '%')
            ->orWhere('checkOut', 'like', '%' . $search . '%')
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->latest()->paginate(10);

        return view('admin.bookings.index', ['reservations' => $reservations]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        try {

            $reservation->delete();

            return redirect()->back()->with('success', 'Reservation deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong! Please try again.');
        }
    }
}
