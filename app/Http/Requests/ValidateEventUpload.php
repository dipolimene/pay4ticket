<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateEventUpload extends FormRequest
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
            //validating the sell ticket/upload form
            'title' => "required",
            'description' => "required | max:190",
            'genre' => "required",
            'date' => "required",
            'time' => "required",
            'price' => "required | numeric",
            'premium' => "required | max:4",
            'identity' => "required | max:4",
            'location' => "required | max:190",
            'address' => "required | max:190",
            'flyer' => "required | image | mimes:jpeg,bmp,png | dimensions:width=700,height=1000",
            'banner' => "required | image | mimes:jpeg,bmp,png | dimensions:width=1600,height=800"
        ];
    }
}
