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

    'facebook' => [
        'client_id' => '797385745553132',
        'client_secret' => '70a6c7e1f151a73dc9d52ca2f9e7667c',
        'redirect' => '/loginFacebook/callback',
    ],
    'google' => [
        'client_id' => '635640958348-c1il8pbrmvk80grpi8ubg1i8fk784l6i.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/loginGoogle/callback',
    ],
];
