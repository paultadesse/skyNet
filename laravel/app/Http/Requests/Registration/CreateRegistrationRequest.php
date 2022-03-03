<?php

namespace App\Http\Requests\Registration;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //just set it to TRUE ONLY FOR NOW but [ ONLY AUTH USER CAN ACCESS THIS REQUEST in the future]
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
            'name' => 'required',
            'phone_number' => 'required|max:10',
            'email' => 'required|email', 
            'service_type' => 'required', 
            'desired_speed' => 'required', 
            'site_location' => 'required_without:site_location_not_listed',
            'site_location_not_listed' => 'required_without:site_location',
            'comment' 
        ];
    }

    //override the faildValidation method of this form request class...
    protected function failedValidation(Validator $validator) 
    { 
        throw new HttpResponseException(response()->json($validator->errors(), 422)); 
    }
}
