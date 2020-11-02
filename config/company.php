<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company config
    |--------------------------------------------------------------------------
    |
    |
    */

    'phone' => env('COMPANY_PHONE', '+237 690 467 995'),
    'email' => env('COMPANY_EMAIL', 'mboacutz@gmail.com'),
    'address' => env('COMPANY_ADDRESS', 'Bonapriso Douala, CAMEROUN'),

    'facebook' =>  env('COMPANY_FACEBOOK', 'https://www.facebook.com/mboacutz/'),
    'twitter' =>  env('COMPANY_TWITTER', 'https://www.twitter.com/mboa_cutz/'),
    'instagram' =>  env('COMPANY_INSTAGRAM', 'https://www.instagram.com/mboa_cutz/'),

    'experts' =>  env('COMPANY_EXPERTS', 7),
    'haircuts' =>  env('COMPANY_HAIRCUTS', 18),
    'products' =>  env('COMPANY_PRODUCTS', 13),
    'satisfied' =>  env('COMPANY_SATISFIED', 22),

    'admin' =>  env('ADMIN_URL', 'https://localhost:8000/storage'),
];
