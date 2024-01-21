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
            'tour_name' => 'required',
            'tour_price' => 'required',
            'tour_discount' => 'required',
            'tour_image' => 'required|image|max:2048',
            'tour_description' => 'required',
            'tour_locationStart' => 'required',
            'tour_locationEnd' => 'required',
            'tour_quantytiDate' => 'required',
            'tour_dateStart' => 'required',
            'tour_dateEnd' => 'required',
            'category_id' => 'required',
            'tourGuide_id' => 'required'
        ];
    }
}
