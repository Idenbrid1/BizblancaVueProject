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
        'client_id' => '715872452309-baki1ubt8saj6qqptg3ebceakq2nub4c.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://bizblanca.com/api/auth/google/callback',
    ],
    'github' => [
        'client_id' => '8311b250ab382b37ecc5',
        'client_secret' => '8211d057596cdea4d249286d4b2eed36afbdfb0c',
        'redirect' => 'https://bizblanca.com/api/auth/github/callback',
    ],
    'linkedin' => [
        'client_id' => '86s11w9v6n8x5m',
        'client_secret' => 'q2vO0O6z93XwuKkb',
        'redirect' => 'https://bizblanca.com/api/auth/linkedin/callback',
    ],

];
