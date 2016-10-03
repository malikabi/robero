<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateRegistration extends Request
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
            'first_name'      => 'bail|required',
            'last_name'      => 'bail|required',
            'user_name'          => 'bail|required',
            'user_type'              => 'bail|required',
            'email'                 => 'bail|required|email',
            'password'            => 'bail|required|min:5'
        ];
    }
}
