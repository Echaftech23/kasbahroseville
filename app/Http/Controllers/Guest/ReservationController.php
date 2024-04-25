<?php

namespace App\Http\Controllers\Guest;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);
        $reservations = Reservation::with('payment', 'user')->where('user_id', Auth::id())->latest()->paginate(6);

        return view('guest.reservations.index', compact('reservations', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(StoreReservationRequest $request)
    {
        try {
            $this->authorize('create', Reservation::class);

            $room = Room::find($request->room_id);

            if ($room->isAvailable($request->total_children, $request->total_adults, $request->checkIn, $request->checkOut)) {

                $sessionData = [
                    'user_id' => Auth::id(),
                    'room_id' => $request->room_id,
                    'checkIn' => $request->checkIn,
                    'checkOut' => $request->checkOut,
                    'adults' => $request->total_adults,
                    'children' => $request->total_children,
                    'price' => $request->price,
                    'total_amount' => $request->price,
                    'ref' => $request->ref
                ];

                return app(PaymentController::class)->checkout($sessionData);
            }
            else{
                return back()->with('error', 'Room is not available');
            }
        } catch (AuthorizationException $e) {
            return redirect()->back()->with('error', 'You have already created 2 reservations. Please wait for admin acceptance.');
        }
    }

    // Check Avaiable rooms
    function available_rooms(Request $request)
    {
        try {
            $checkIn = $request->input('checkIn');
            $checkOut = $request->input('checkOut');
            $children = $request->input('children');
            $adults = $request->input('adults');
            $price = $request->input('price');

            $availableRooms = Room::whereDoesntHave('reservations', function ($query) use ($checkIn, $checkOut) {
                $query->where(function ($query) use ($checkIn, $checkOut) {
                    $query->where('checkIn', '<', $checkOut)
                    ->where('checkOut', '>', $checkIn);
                })->orWhere(function ($query) use ($checkIn, $checkOut) {
                    $query->whereBetween('checkIn', [$checkIn, $checkOut])
                    ->orWhereBetween('checkOut', [$checkIn, $checkOut]);
                });
            })

            ->where('capacity', '>=', $children + $adults)
            ->where('price', '<=', $price)
            ->with('type', 'facilities')
            ->latest()
            ->paginate(3);

            $links = $availableRooms->links('vendor.pagination.header')->toHtml();

            $availableRooms = $availableRooms->map(function ($room) {
                $room->imageUrl = $room->getFirstMediaUrl('rooms');
                $room->detailsUrl = route('home.rooms.show', $room->id);
                return $room;
            });

            return response()->json(['rooms' => $availableRooms, 'links' => $links]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Reservation $reservation)
    {
        $this->authorize('view', $reservation);

        $room = $reservation->room ?? abort(404, 'Reservation not found.');

        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

        $images = $room->load('facilities', 'type')->getMedia('rooms');

        return $request->ajax()
            ? view('data', compact('rooms'))
            : view('guest.reservations.show', compact('rooms', 'room', 'images', 'reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Reservation $reservation)
    {
        try {

            $this->authorize('update', $reservation);

            $room = $reservation->room ?? abort(404, 'Reservation not found.');

            $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

            $images = $room->load('facilities', 'type')->getMedia('rooms');

            return $request->ajax()
            ? view('data', compact('rooms'))
                : view('guest.reservations.edit', compact('rooms', 'room', 'images', 'reservation'));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Reservation $reservation)
    {
        $this->authorize('delete', $reservation);

        $hoursSinceCreation = $reservation->created_at->diffInHours(now());
        $isSameDay = Carbon::parse($reservation->checkIn)->isToday();

        if($hoursSinceCreation <= 48 && !$isSameDay) {
            $reservation->delete();
            return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully');
        }

        return back()->with('error', 'Reservation can only be deleted within 48 hours of creation and not on the same day of check-in');
    }
}
