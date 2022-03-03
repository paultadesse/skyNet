<?php

namespace App\Http\Requests\SiteLocation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateSiteLocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //[ ONLY AUTH USER with ADMIN role CAN ACCESS THIS REQUEST ]
        return auth()->user()->hasRole('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }

    //override the faildValidation method of this form request class...
    protected function failedValidation(Validator $validator) 
    { 
        throw new HttpResponseException(response()->json($validator->errors(), 422)); 
    }
}
