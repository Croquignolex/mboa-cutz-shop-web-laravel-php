<?php

namespace App\Traits;

trait RequestTrait
{
    private $required_email = 'required|string|min:2|max:255|email';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}