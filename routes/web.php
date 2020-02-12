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
    return view('welcome');
});

Route::get('/Donor', function () {
    return view('Donor');
});
Route::get('/dec', function () {
    return view('dec');
});

Route::get('/gdpr', function(){
    return view('gdpr');
});

Route::resource('record', 'RecordController');
// Route::get('/WDAT/records', 'RecordController@index')->name('record.index');
// Route::get('/WDAT/record/create', 'RecordController@create')->name('record.create');
// Route::post('/WDAT/records', 'RecordController@store')->name('record.store');

Auth::routes();
    // // Authentication Routes...
    // $this->get('', 'Auth\LoginController@showLoginForm')->name('login');
    // $this->post('login', 'Auth\LoginController@login');
    // $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    // // Registration Routes...
    // $this->get('ketley-hallman', 'Auth\RegisterController@showRegistrationForm')->name('register');
    // $this->post('ketley-hallman', 'Auth\RegisterController@register');

    // // Password Reset Routes...
    // $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    // $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    // $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // $this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
