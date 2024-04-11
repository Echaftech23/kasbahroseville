<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'room_id' => 'required|exists:rooms,id',
            'checkIn' => 'required|date|after:today',
            'checkOut' => 'required|date|after:checkIn',
            'total_adults' => 'required|integer|min:1',
            'total_children' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'ref' => 'required|string',
        ];
    }
}
