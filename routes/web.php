<?php

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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', 'View\MemberController@toLogin');
Route::get('/register', 'View\MemberController@toRegister');

Route::get('/category', function (){
    return view('category');
});

Route::group(['prefix' => 'service'], function () {
    Route::get('/validate_code/create', 'Service\ValidateController@create');
    Route::post('/validate_phone/send', 'Service\ValidateController@sendSMS');
    Route::post('/validate_email', 'Service\ValidateController@validateEmail');
    Route::post('/register', 'Service\MemberController@register');
    Route::post('/login', 'Service\MemberController@login');
});