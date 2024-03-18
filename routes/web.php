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

Route::get('/', 'HomeController@index')->name('index');

Route::prefix('newsfeed')->group(function () {
    Route::get('', 'NewsfeedController@index')->name('newsfeed.index');

    Route::group(['middleware' => 'auth'], function () {
        Route::post('create', 'NewsfeedController@create')->name('newsfeed.post.create');
        Route::get('{post}', 'NewsfeedController@show')->name('newsfeed.post.show');
        Route::get('{post}/edit', 'NewsfeedController@edit')->name('newsfeed.post.edit');
        Route::post('{post}/update', 'NewsfeedController@update')->name('newsfeed.post.update');
        Route::get('{post}/delete', 'NewsfeedController@destroy')->name('newsfeed.post.destroy');
        Route::post('{post}/like-toggle', 'NewsfeedController@likeToggle')->name('newsfeed.post.like');
        Route::post('{post}/comment', 'NewsfeedController@comment')->name('newsfeed.post.comment.create');
        Route::post('{post}/comment/{comment}/reply', 'NewsfeedController@reply')->name('newsfeed.post.reply');
    });
});

Route::match(['get', 'post'], 'submit-tool', 'ToolController@create')->middleware('auth')->name('tools.create');
Route::get('about-us', 'HomeController@aboutUs')->name('about-us');
Route::get('contact-us', 'HomeController@contactUs')->name('contact-us');
Route::get('favorites', 'HomeController@favorites')->middleware('auth')->name('favorites');

Route::prefix('events')->group(function () {
    Route::get('/', 'EventController@index')->name('events.index');
    Route::get('/{event}', 'EventController@show')->name('events.show');
    Route::get('/{event}/interested', 'EventController@interested')->name('events.interested');
});

Route::prefix('categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/{category}', 'CategoryController@show')->name('categories.show');
});

Route::prefix('tools')->group(function () {
    Route::get('', 'ToolController@index')->name('tools.index');
    Route::get('search/{tool}', 'ToolController@search')->name('tools.search');
    Route::get('{tool}', 'ToolController@show')->name('tools.show');

    Route::group(['middleware' => 'auth'], function () {
        Route::match(['get', 'post'], '{tool}/edit', 'ToolController@edit')->name('tools.edit');
        Route::get('{tool}/update-screenshots', 'ToolController@updateScreenshots')->name('tools.update-screenshots');
        Route::get('{tool}/delete', 'ToolController@destroy')->name('tools.destroy');
        Route::get('{tool}/success', 'ToolController@success')->name('tools.success');

        Route::get('{tool}/rate', 'ToolController@rate')->name('tools.rate');
        Route::get('{tool}/unrate', 'ToolController@unrate')->name('tools.unrate');
        Route::get('{tool}/feature', 'ToolController@feature')->name('tools.feature');
        Route::get('{tool}/unfeature', 'ToolController@unfeature')->name('tools.unfeature');
        Route::get('{tool}/approve', 'ToolController@approve')->name('tools.approve');
        Route::get('{tool}/unapprove', 'ToolController@unapprove')->name('tools.unapprove');
        Route::match(['get', 'post'], '{tool}/favorite', 'ToolController@favorite')->name('tools.favorite');
        Route::match(['get', 'post'], '{tool}/unfavorite', 'ToolController@unfavorite')->name('tools.unfavorite');
        Route::get('{tool}/like', 'ToolController@like')->name('tools.like');
        Route::get('{tool}/unlike', 'ToolController@unlike')->name('tools.unlike');
        Route::get('{tool}/share', 'ToolController@share')->name('tools.share');
        Route::post('{tool}/review', 'ToolController@review')->name('tools.review');
        Route::post('{tool}/{rating}/reply', 'ToolController@reply')->name('tools.reply');
    });
});

Route::prefix('requests')->group(function () {
    Route::get('/', 'RequestController@index')->name('requests.index');
    Route::get('/{request}', 'RequestController@show')->name('requests.show');
    Route::match(['get', 'post'], 'create', 'RequestController@create')->name('requests.create');
});

Route::prefix('profile')->group(function () {
    Route::get('{username}', 'ProfileController@show')->name('profile.show');
    Route::get('{username}/about', 'ProfileController@about')->name('profile.about');
    Route::get('{username}/photos', 'ProfileController@photos')->name('profile.photos');
});

Route::middleware('auth')->group(function () {
    Route::match(['get', 'post'], 'choose-username', 'AuthController@chooseUsername')->name('auth.choose-username');
    Route::match(['get', 'post'], 'change-username', 'xxxxxxxxxxxxxx@xxxxxxxxxxxxxx')->name('auth.change-username');
    Route::match(['get', 'post'], 'change-email', 'xxxxxxxxxxxxxx@xxxxxxxxxxxxxx')->name('auth.change-email');
    Route::match(['get', 'post'], 'change-password', 'xxxxxxxxxxxxxx@xxxxxxxxxxxxxx')->name('auth.change-password');

    Route::match(['get', 'post'], 'settings', 'AuthController@settings')->name('auth.settings');
    Route::post('upload-avatar', 'AuthController@uploadAvatar')->name('auth.upload-avatar');
    Route::post('upload-cover', 'AuthController@uploadCover')->name('auth.upload-cover');

    Route::get('signout', 'AuthController@signout')->name('auth.signout');
});
