<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'username' => 'required',
            'bio' => 'required',
            'linkedin' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'display_mail' => 'required',
            'avatar' => 'mimes:jpeg,jpg,png|max:1000'
        ];
    }
}
