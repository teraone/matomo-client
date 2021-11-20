<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Matomo Site URL
    |--------------------------------------------------------------------------
    |
    | This options sets the Matomo Site URL
    | Do only use https URLs with a valid certificate.
    | Use https://demo.matomo.cloud/ to demo requests
    */
    'site_url'    => env( 'MATOMO_URL' ),

    /*
    |--------------------------------------------------------------------------
    | Matomo Site ID
    |--------------------------------------------------------------------------
    |
    | The ID of your Matomo Site.
    |
    */
    'site_id'     => env( 'MATOMO_SITE_ID' ),

    /*
    |--------------------------------------------------------------------------
    | Matomo Token
    |--------------------------------------------------------------------------
    |
    | The secret token used with each request.
    |
    */
    'token'       => env( 'MATOMO_TOKEN' ),

    /*
    |--------------------------------------------------------------------------
    | Log Requests
    |--------------------------------------------------------------------------
    |
    | If set to true, each request to Matomo will be logged
    |
    */
    'log_enabled' => false,


    /*
    |--------------------------------------------------------------------------
    | Log Target
    |--------------------------------------------------------------------------
    |
    | Where you want to log requests
    |
    */
    'log_channel' => config( 'logging.default' ),
];
