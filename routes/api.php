<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    $user = $request->user();

    return [
        'user' => $user,
        'is_superadmin' => $user ? ($user->role === 'superadmin') : false,
    ];
})->middleware('auth:sanctum');
