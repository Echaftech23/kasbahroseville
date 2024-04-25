<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservationRequest extends FormRequest
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
        $reservation = $this->route('reservation');
        if ($reservation->ref === 'guest') {
            return[
                'statut' => ['required', 'in:Pending,Confirmed,Rejected, "Checked In", "Checked Out", "Due In", "Due Out"'],
            ];
        }
        return [

            'name' => 'required|max:255',
            'email' => 'required|email',
            'room_id' => 'required|exists:rooms,id',
            'checkIn' => 'required|date',
            'checkOut' => 'required|date|after:checkIn',
            'total_adults' => 'required|integer|min:1',
            'total_children' => 'required|integer|min:0',
            'statut' => ['required', 'in:Pending,Confirmed,Rejected, "Checked In", "Checked Out", "Due In", "Due Out"'],
            'room_statut' => ['required', 'in:"Available", "Out of service"'],
            'totalAmount' => 'required|numeric',
            'amountPaid' => 'required|numeric',
        ];
    }
}
