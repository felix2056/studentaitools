<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->group(function () {
    Route::match(['get', 'post'], 'signin', 'AuthController@signin')->name('auth.signin');
    Route::match(['get', 'post'], 'signup', 'AuthController@signup')->name('auth.signup');
});

Route::get('/', 'HomeController@index');
Route::get('submit-tool', 'ToolController@create')->middleware('auth')->name('tools.create');
Route::get('about-us', 'HomeController@aboutUs')->name('about-us');
Route::get('contact-us', 'HomeController@contactUs')->name('contact-us');

Route::prefix('tools')->group(function () {
    Route::get('/', 'ToolController@index')->name('tools.index');
    Route::get('/{tool}', 'ToolController@show')->name('tools.show');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('{tool}/edit', 'ToolController@edit')->name('tools.edit');
        Route::get('{tool}/delete', 'ToolController@destroy')->name('tools.destroy');
        Route::get('{tool}/rate', 'ToolController@rate')->name('tools.rate');
        Route::get('{tool}/unrate', 'ToolController@unrate')->name('tools.unrate');
        Route::get('{tool}/feature', 'ToolController@feature')->name('tools.feature');
        Route::get('{tool}/unfeature', 'ToolController@unfeature')->name('tools.unfeature');
        Route::get('{tool}/approve', 'ToolController@approve')->name('tools.approve');
        Route::get('{tool}/unapprove', 'ToolController@unapprove')->name('tools.unapprove');
        Route::get('{tool}/bookmark', 'ToolController@bookmark')->name('tools.bookmark');
        Route::get('{tool}/unbookmark', 'ToolController@unbookmark')->name('tools.unbookmark');
        Route::get('{tool}/like', 'ToolController@like')->name('tools.like');
        Route::get('{tool}/unlike', 'ToolController@unlike')->name('tools.unlike');
        Route::get('{tool}/share', 'ToolController@share')->name('tools.share');
        Route::post('{tool}/review', 'ToolController@review')->name('tools.review');
        Route::post('{tool}/{rating}/reply', 'ToolController@reply')->name('tools.reply');
    });
});
