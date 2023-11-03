<?php

use Illuminate\Support\Str;

return [
    'tenant_db_prefix' => env('TENANT_DB_PREFIX', ''),
    'app_main_domain' => env('APP_MAIN_DOMAIN') . '.care',
    'landlord_db_name' => env('DB_DATABASE', ''),
];
