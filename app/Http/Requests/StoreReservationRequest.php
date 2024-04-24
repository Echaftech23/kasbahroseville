<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (Auth::user()->hasRole('Guest')) {
            return [
                'room_id' => 'required|exists:rooms,id',
                'checkIn' => 'required|date|after_or_equal:today',
                'checkOut' => 'required|date|after:checkIn',
                'total_adults' => 'required|integer|min:1',
                'total_children' => 'required|integer|min:0',
                'price' => 'required|numeric',
                'ref' => 'required|string'
            ];
        }

        return [
            'name' => 'required|max:255',
            'email' =>
            'required|email',
            'room_id' => 'required|exists:rooms,id',
            'checkIn' => 'required|date|after_or_equal:today',
            'checkOut' => 'required|date|after:checkIn',
            'total_adults' => 'required|integer|min:1',
            'total_children' => 'required|integer|min:0',
            'totalAmount' => 'required|numeric',
            'amountPaid' => 'required|numeric',
            'statut' => 'required|string',
        ];
    }
}
