<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
{
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
        return [
            'phone_number'      => 'required|string|unique: providers|max: 14|min: 10', 
            'balance'           => 'integer', 
            'is_available'      => 'integer|boolean', 
            'account_status'    => 'integer|boolean', 
            'last_seen'         => 'date', 
        ];
    }
}
