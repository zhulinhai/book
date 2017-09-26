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

Route::any('/service/validate_code/create', 'Service\ValidateController@create');
Route::any('/service/validate_phone/send', 'Service\ValidateController@sendSMS');
Route::any('/service/validate_email', 'Service\ValidateController@validateEmail');
Route::POST('/service/register', 'Service\MemberController@register');
