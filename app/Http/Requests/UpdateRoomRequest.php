<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
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
            'name' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'required|numeric',
            'statut' => 'required|in:dirty,cleaning,clean',
            'priority' => 'required|in:low,high',
            'capacity' => 'required|integer',
            'type_id' => 'required|exists:types,id',
            'facility_id' => 'required|exists:facilities,id',
        ];
    }
}
