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
    'weixin' => [
        'client_id' => env('WEIXIN_CLIENT_ID'),
        'client_secret' => env('WEIXIN_CLIENT_SECRET'),
        'redirect' => env('WEIXIN_REDIRECT_URI')
    ],
    'weixinweb' => [
        'client_id' => env('WEIXINWEB_CLIENT_ID'),
        'client_secret' => env('WEIXINWEB_CLIENT_SECRET'),
        'redirect' => env('WEIXINWEB_REDIRECT_URI')
    ],
    'wechat_service_account' => [
        'client_id' => env('WECHATSERVICEACCOUNT_CLIENT_ID'),
        'client_secret' => env('WECHATSERVICEACCOUNT_CLIENT_SECRET'),
        'redirect' => env('WECHATSERVICEACCOUNT_REDIRECT_URI')
    ],
    'wechat_web' => [
        'client_id' => env('WECHATWEB_CLIENT_ID'),
        'client_secret' => env('WECHATWEB_CLIENT_SECRET'),
        'redirect' => env('WECHATWEB_REDIRECT_URI')
    ],
    'qq' => [
        'client_id' => env('QQ_CLIENT_ID'),
        'client_secret' => env('QQ_CLIENT_SECRET'),
        'redirect' => env('QQ_REDIRECT_URI')
    ],
    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_REDIRECT_URI')
    ],
];
