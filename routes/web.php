<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Welcome');


Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');

    Route::post('tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('tweets/{tweet}/like', 'TweetLikesController@destroy');

    Route::post('/profiles/{user:username}/follow', 'FollowController@store')->name('follow');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfileController@update')->middleware('can:edit,user');
    Route::get('/explore', 'ExploreController');
});


Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');

Auth::routes();
