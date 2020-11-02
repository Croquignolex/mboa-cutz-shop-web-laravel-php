<?php

namespace App\Http\Requests;

use App\Traits\RequestTrait;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    use RequestTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => $this->required_string,
            'first_name' => $this->required_string,
            'email' => "{$this->required_string}|unique:users",
            'password' => "{$this->required_string}|min:6|confirmed",
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.unique' => __('auth.user_existed'),
            'password.confirmed' => __('auth.password_unconfirmed')
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  Validator  $validator
     * @return void
     */
    public function withValidator(Validator $validator)
    {
        $validator->after(function () {
            danger_toast_alert(__('toast.generic_error'));
        });
    }
}