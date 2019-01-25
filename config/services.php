<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id'     => '377011542403-k729qci46o0vmnmj98kpq19cj18atot6.apps.googleusercontent.com',
        'client_secret' => 'EipbAFAX0LhrLLa-rr43QOlV',
        'redirect'      => 'http://localhost:8000/callback'
    ],

    'github' => [
        'client_id' => '1062af2dda5e499e8ece',
        'client_secret' => '4db17afc37efc7b439b99a606a3ead576809657e',
        'redirect' => 'https://127.0.0.1:8000/login/github/callback'
    ],

];
