<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Greengo Delivery API',
        'version' => '1.0.0',
        'status' => 'active'
    ]);
});

Route::get('/api', function () {
    return response()->json([
        'message' => 'Greengo Delivery API',
        'version' => '1.0.0',
        'status' => 'active',
        'endpoints' => [
            'web' => '/api/web',
            'auth' => '/api/auth',
            'admin' => '/api/app/admin'
        ]
    ]);
});
