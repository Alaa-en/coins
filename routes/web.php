<?php



Route::get('/', function () {
    return view('front.index');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/log_in', 'logincontroller@login')->name('log_in');


//routes for users
Route::get('/users', 'UsersController@users')->name('users');
Route::get('/user/create', 'UsersController@create')->name('user.create');
Route::post('/user/store', 'UsersController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UsersController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UsersController@update')->name('user.update');
Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');


Route::get('/change_active/{id}/{type}', 'HomeController@change_active')->name('user.change_active');





###########   COINS ######3
Route::get('/home', 'CoinsController@index')->name('home');
Route::get('coins/create', 'CoinsController@create')->name('coin.add');
Route::post('/coins/store', 'CoinsController@store')->name('coins.store');

