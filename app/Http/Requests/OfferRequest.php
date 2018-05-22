<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'title'            => 'required|string|max: 160|min: 3', 
            'description'      => 'string|min: 10', 
            // 'longitude'        => 'required', 
            // 'latitude'         => 'required', 
            'max_price'        => 'integer', 
            'min_price'        => 'integer', 
            // 'offer_start_date' => 'required|date', 
            // 'offer_end_date'   => 'required|date', 
            'status'           => 'integer|boolean', 
            'level'            => 'integer|boolean', 
            'departments_id'   => 'integer', 
            'customers_id'     => 'integer',
            'provider_id'      => 'integer',
        ];
    }
}
