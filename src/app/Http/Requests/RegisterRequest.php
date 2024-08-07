<?php

namespace App\Http\Requests;

use Laravel\Fortify\Http\Request\RegisterRequest as FortifyRegisterRequest;

class RegisterRequest extends FortifyRegisterRequest
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
            'name' => 'required'| 'string'| 'max:191',
            'email' => 'required'| 'string'| 'max:191'| Rule::unique('users')->ignore($this->id),
            'password' => 'required'|'mix:8'| 'max:191',
        ];
    }
}
