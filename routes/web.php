<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/explore', function () {
    return view('explore');
})->name('explore');
Route::get('/docs', function () {
    return view('docs');
})->name('docs');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Auth::routes();

// Admin area (prefix /sumin) protected by EnsureSuperadmin middleware
Route::prefix('sumin')
    ->middleware(['auth', \App\Http\Middleware\EnsureSuperadmin::class])
    ->group(function () {
        // Admin dashboard
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('sumin.home');

        // Users resource
        Route::resource('users', App\Http\Controllers\Sumin\UserController::class)->names('sumin.users');

        // Catch-all placeholder: let app return 404 for unknown admin routes
        Route::any('{any}', function () {
            abort(404);
        })->where('any', '.*');
    });
