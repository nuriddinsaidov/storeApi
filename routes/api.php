composer require laravel/passport<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::post('register', 'API\RegisterController@register');

Route::middleware('auth:api')->group( function () {
    Route::resource('products', 'API\ProductController');




});

Route::get('/products','API\ProductController@index');
Route::get('/tags', 'API\TagController@index');