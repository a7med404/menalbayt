<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use \App\Models\customer;

class CustomerRequest extends FormRequest
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
    public function rules(customer $customer)
    {
        return [
            'first_name'   => 'required|string|max:100|min:3', 
            'last_name'    => 'required|string|max: 100|min: 3', 
            'phone_number' => 'required|string|max:14|min:10',
            'phone_number' =>  Rule::unique('customers')->ignore($customer->id), #not work
            'image'        => 'image|mimes:png,jpg,jpeg|nullable|max:4096', 
            'gender'       => 'integer|boolean', 
        ];
    }
}
