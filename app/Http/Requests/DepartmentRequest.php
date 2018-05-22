<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'name'        => 'required|unique:departments|string|max:100|min:3', 
            'image'       => 'image|mimes:png,jpg,jpeg|nullable|', 
            'description' => 'string|min:10|max: 160|nullable', 
            'status'      => 'integer|boolean', 
        ];
    }
}
