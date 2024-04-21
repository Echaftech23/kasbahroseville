<?php

namespace App\Http\Controllers\FrontDesk;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Room;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $payments = Payment::latest()->paginate(10);
        $totalInvoices = Payment::count();

        return view('front-desk.payments.index', compact('payments', 'totalInvoices'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return view('front-desk.payments.show', compact('payment'));
    }

    public function download(Payment $payment)
    {
        try {
            $rooms = Room::with('type', 'facilities')->latest()->paginate(6);
            return view('guest.invoice-data', compact('rooms', 'payment'));
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        try {
            $payment->update($request->validated());
            return redirect()->back()->with('success', 'Payment updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'Something went wrong!');
        }
    }
}
