<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '449602895801-umo59mfi8i2vaqog6gs9ce484imlqsdt.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/google/callback',
    ],

    'payme' => [
        'id' => env('PAYME_ID', '60e546db20e377bb07d19343'),
        'key' => env('PAYME_KEY', 'BvihvzxMFB9Gd2XsIWjdFkA5fm8ir3kUR44N'),
        'endpoint_url'=>env('ENPOINT_URL', 'https://checkout.test.paycom.uz/api')

    ]

];
