<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
{
    protected $rules = [
        'POST' => [
            'supplier' => 'required',
            'truck_no' => 'required',
            'delivered_to' => 'required',
            'date' => 'required|date',
            'total_pieces' => 'required|numeric',
            'total_volume_cubic_meters' => 'required|between:0.01,9999999.99',
            'grand_total' => 'required|between:0.01,9999999.99',
            'payment' => 'between:0.01,9999999.99',
            'balance' => 'between:0.01,9999999.99',
            'cash_advance' => 'between:0.01,9999999.99',
        ],
        'PATCH' => [
            'supplier' => 'required',
            'truck_no' => 'required',
            'delivered_to' => 'required',
            'date' => 'required|date',
            'total_pieces' => 'required|numeric',
            'total_volume_cubic_meters' => 'required|between:0.01,9999999.99',
            'grand_total' => 'required|between:0.01,9999999.99',
            'payment' => 'between:0.01,9999999.99',
            'balance' => 'between:0.01,9999999.99',
            'cash_advance' => 'between:0.01,9999999.99',
        ],
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->rules[$this->method()];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
