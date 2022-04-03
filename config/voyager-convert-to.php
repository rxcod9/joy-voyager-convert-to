<?php

return [

    /*
     * If enabled for voyager-convert-to package.
     */
    'enabled' => env('VOYAGER_CONVERT_TO_ENABLED', true),

    /*
    | Here you can specify for which data type slugs convert-to is enabled
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'allowed_slugs' => array_filter(explode(',', env('VOYAGER_CONVERT_TO_ALLOWED_SLUGS', '*'))),

    /*
    | Here you can specify for which data type slugs convert-to is not allowed
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'not_allowed_slugs' => array_filter(explode(',', env('VOYAGER_CONVERT_TO_NOT_ALLOWED_SLUGS', ''))),

    /*
     * The config_key for voyager-convert-to package.
     */
    'config_key' => env('VOYAGER_CONVERT_TO_CONFIG_KEY', 'joy-voyager-convert-to'),

    /*
     * The route_prefix for voyager-convert-to package.
     */
    'route_prefix' => env('VOYAGER_CONVERT_TO_ROUTE_PREFIX', 'joy-voyager-convert-to'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerConvertTo\\Http\\Controllers',
    ],
];
