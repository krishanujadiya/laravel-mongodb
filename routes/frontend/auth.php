<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SocialController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::group(['as' => 'auth.'], function () {
    Route::group(['middleware' => 'auth'], function () {
        // Authentication
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    });

    Route::group(['middleware' => 'guest'], function () {
        // Authentication

        // Socialite Routes
        Route::get('login/{provider}', [SocialController::class, 'redirect'])->name('social.login');
        Route::get('login/{provider}/callback', [SocialController::class, 'callback']);
    });
});
