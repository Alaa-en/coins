<?php



Route::get('/', function () {
    return view('front.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'HomeController@users')->name('users');


Route::get('/change_active/{id}/{type}', 'HomeController@change_active')->name('user.change_active');


Route::get('my-notification/{type}', 'HomeController@myNotification');


