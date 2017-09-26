<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProfile extends FormRequest
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
            //validating profile details
            "organizer" => "required | min:6",
            "address" => "required | max:150",
            "public_email" => "required | email",
            "private_number" => "required | numeric | digits:11",
            "public_number" => "required | numeric | digits:11",
            "social_media" => "required | max:150",
            "nuban" => "required | numeric | digits:10",
            "bank_name" => "required | max:25",
            "beneficiary" => "required"
        ];
    }
}
