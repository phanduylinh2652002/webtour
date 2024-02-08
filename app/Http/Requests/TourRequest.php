<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            //
            'tour_id' => 'required',
            'tour_name' => 'required',
            'tour_price' => 'required',
            'tour_discount' => 'required',
            'tour_image' => 'required|image|max:2048',
            'tour_place' => 'required',
            'tour_vehicle' => 'required',
            'tour_description' => 'required',
            'tour_trip' => 'required',
            'tour_locationStart' => 'required',
            'tour_locationEnd' => 'required',
            'tour_quantytiDate' => 'required',
            'tour_dateStart' => 'required',
            'tour_dateEnd' => 'required',
            'category_id' => 'required',
            'tourGuide_id' => 'required'
        ];
    }

    public function message()
    {
        return [
            'tour_id' => 'tour_id required',
            'tour_name' => 'tour_name required',
            'tour_price' => 'tour_price required',
            'tour_discount' => 'tour_discount required',
            'tour_image' => 'tour_image required',
            'tour_place' => 'tour_place required',
            'tour_vehicle' => 'tour_vehicle required',
            'tour_description' => 'tour_description required',
            'tour_trip' => 'tour_trip required',
            'tour_locationStart' => 'tour_locationStart required',
            'tour_locationEnd' => 'tour_locationEnd required',
            'tour_quantytiDate' => 'tour_quantytiDate required',
            'tour_dateStart' => 'tour_dateStart required',
            'tour_dateEnd' => 'tour_dateEnd required',
            'category_id' => 'category_id required',
            'tourGuide_id' => 'tourGuide_id required'
        ];
    }
}
