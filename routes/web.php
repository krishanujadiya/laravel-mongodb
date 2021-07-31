<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', 'HomeController@index')->name('home');

Route::any('/contact-us', 'ContactController@contact');

Route::any('/contact-details-submit', 'ContactController@contactSubmit');

Route::any('/privacy-policy', 'ContactController@privacy');
Route::any('/about-us', 'ContactController@aboutUs');
Route::any('/disclaimer', 'ContactController@disclaimer');


Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/logout', 'Auth\LoginController@logout');

Route::any('/sitemap',function()
{
    SitemapGenerator::create('https://#.com')->writeToFile('sitemap.xml');
    return "sitemap generated";
}
);

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});