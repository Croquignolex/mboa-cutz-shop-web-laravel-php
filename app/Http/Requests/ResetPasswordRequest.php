<?php

namespace App\Http\Requests;

use App\Traits\RequestTrait;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'email' => $this->required_string,
            'password' =>"{$this->required_string}|min:6|confirmed",
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