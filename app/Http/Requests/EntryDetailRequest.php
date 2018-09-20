<?php

namespace App\Http\Requests;

use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EntryDetailRequest extends FormRequest
{
    use ApiRequestTrait;
    protected $rules = [
        'POST' => [
            'entry_type_id' => 'required|exists:entry_types,id',
            'length' => 'required',
            'diameter' => 'required',
            'volume' => 'required',
        ],
        'PATCH' => [
            'entry_id' => 'required',
            'entry_type_id' => 'required|exists:entry_types,id',
            'length' => 'required',
            'diameter' => 'required',
            'volume' => 'required',
        ],
    ];

    protected function failedValidation(Validator $validator)
    {
        throw new ValidationHttpException($validator->errors());
    }

    protected function failedAuthorization()
    {
        throw new HttpException(403);
    }

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
}
