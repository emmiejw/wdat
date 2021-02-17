<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});
Route::get('/dec', function () {
    return view('dec');
});

Route::get('/gdpr', function(){
    return view('gdpr');
});

Route::group(['middleware' => ['auth']], function () {

Route::resource('record', 'RecordController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
