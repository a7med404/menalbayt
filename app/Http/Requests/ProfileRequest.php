<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name'        => 'required|string|max: 100|min: 3', 
            'last_name'         => 'required|string|max: 100|min: 3', 
            'username'          => 'string|max: 100|min: 3|nullable', 
            'email'             => 'email|max: 100|min: 6|nullable', 
            'address_longitude' => 'nullable', 
            'address_latitude'  => 'nullable', 
            'image'             => 'image|mimes:png,jpg,jpeg|nullable', 
            'cover_image'       => 'image|mimes:png,jpg,jpeg|nullable', 
            'gender'            => 'integer|boolean|nullable', 
            'pio'               => 'string|min: 10|nullable', 
            'identifier_number' => 'string|min: 4|max: 25|nullable', 
            'identifier_type'   => 'integer|nullable', 
            'identifier_image'  => 'image|mimes:png,jpg,jpeg|nullable', 
            'trusted'           => 'integer|boolean|nullable', 
            'departments_id'    => 'integer|nullable',
        ];
    }
}
