<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
