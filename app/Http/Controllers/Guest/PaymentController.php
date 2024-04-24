<?php

namespace App\Http\Controllers\Guest;

use App\Models\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\PaymentMethode;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Payment::latest()->paginate(10);

        return view('admin.rooms.index', compact('rooms'));
    }


    public function checkout($sessionData)
    {
        session($sessionData);
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Room Reservation',
                    ],
                    'unit_amount' => $sessionData['price'] * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('home'),
        ]);
        return redirect()->away($session->url);
    }

    function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $session = \Stripe\Checkout\Session::retrieve($request->get('session_id'));
        if ($session->payment_status == 'paid') {

            $reservation = new Reservation;
            $reservation->user_id = session('user_id');
            $reservation->room_id = session('room_id');
            $reservation->checkIn = session('checkIn');
            $reservation->checkOut = session('checkOut');
            $reservation->total_adults = session('adults');
            $reservation->total_children = session('children');
            $reservation->ref = session('ref');
            $reservation->save();

            $payment = new Payment;
            $payment->totalAmount = $session->amount_total / 100;
            $payment->amountPaid = $payment->totalAmount;
            $payment->reservation_id = $reservation->id;
            $payment->statut = $session->payment_status == 'paid' ? 'Completed' : $session->payment_status;
            $payment->save();

            $paymentMethode = new PaymentMethode;
            $paymentMethode->type = 'credit card';
            $paymentMethode->payment_id = $payment->id;
            $paymentMethode->save();

            // Retrieve the room and update its status
            $room = Room::find(session('room_id'));
            $room->update(['room_statut' => 'Booked']);

            return redirect()->route('reservations.index')->with('success', 'Congratulaion, Reservation created successfully');
        }
    }

    function booking_payment_fail(Request $request)
    {
        return view('booking.failure');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        $this->authorize('view', $payment);

        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);
        return view('guest.invoice', compact('rooms', 'payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
