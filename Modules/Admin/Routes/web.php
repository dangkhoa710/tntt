<?php

use Illuminate\Routing\Router;

Route::group(
    [
        'prefix' => 'admin',
//        'middleware' => SC_ADMIN_MIDDLEWARE,
        'namespace' => 'Modules\Admin\Http\Controllers'
    ],
    function (Router $router) {
        foreach (glob(__DIR__ . '/*.php') as $filename) {
            require_once $filename;
        }
        //
        Route::get('/', function () {
            return  redirect(route('admin.login'));
        });
    });
