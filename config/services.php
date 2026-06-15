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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'screenshot' => [
        // Which live screenshot provider to use when a site has no cached
        // image: 'mshots' (WordPress, free, no auth) or 'thumio'.
        'provider' => env('SCREENSHOT_PROVIDER', 'mshots'),
        'width' => (int) env('SCREENSHOT_WIDTH', 1200),
        'height' => (int) env('SCREENSHOT_HEIGHT', 750),
    ],

    'thumio' => [
        'auth' => env('THUMIO_AUTH'),
        'options' => env('THUMIO_OPTIONS', 'width/1200/crop/750/png'),
    ],

    'google_analytics' => [
        'id' => env('GOOGLE_ANALYTICS_ID'),
    ],

];
