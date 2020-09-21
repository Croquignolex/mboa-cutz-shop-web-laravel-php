<?php

namespace App\Traits;

trait RequestTrait
{
    private $required_string = 'required|string';
    private $required_numeric = 'required|numeric';
    private $required_email = 'required|string|email';

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