<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'required'             => 'This field is required',
    'string'               => 'This field must be a string',
    'email'                => 'This field must be a valid email address',
    'unique'               => 'This field must be required',
    'confirmed'            => 'This field must be confirmed',
    'numeric'              => 'This field must be a number',
    'file'                 => 'This field must be a file',
    'image'                => 'This field must be an image',
    'dimensions'           => 'This field has invalid dimension',
    'uploaded'             => 'This file failed to upload',
    'max'                  => [
        'file'    => 'This file may not be greater than :max kilobytes',
        'numeric' => 'This field may not be greater than :max',
        'string'  => 'This field may not be greater than :max characters'
    ],
    'min'                  => [
        'file'    => 'This file must be at least than :min kilobytes',
        'numeric' => 'This field must be at least :min',
        'string'  => 'This field must be at least :min characters'
    ],
    'between'              => [
        'numeric' => 'This field must be between :min and :max',
        'file'    => 'This file size must be between :min and :max kilobytes',
        'string'  => 'This field must be between :min and :max characters'
    ],
    'size'                 => [
        'numeric' => 'This field must be :size',
        'file'    => 'This field must be :size kilobytes',
        'string'  => 'This field must have :size characters',
        'array'   => 'This field must contain :size items',
    ],
];