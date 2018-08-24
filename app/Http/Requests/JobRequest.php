<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'name'           => 'required|unique:jobs|string|max:100|min:2', 
            'description'    => 'string|min:10|max: 160|nullable', 
            'departments_id' => 'integer',
            'status'         => 'integer|boolean',
        ];
    }
}
