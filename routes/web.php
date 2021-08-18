<?php


Route::get('/', function () {
    return redirect()->route('home');
});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/log_in', 'logincontroller@login')->name('log_in');


//routes for users
Route::get('/users', 'UsersController@users')->name('users');
Route::get('/user/create', 'UsersController@create')->name('user.create');
Route::post('/user/store', 'UsersController@store')->name('user.store');
Route::get('/user/edit', 'UsersController@edit')->name('user.edit');
Route::get('/profile/edit', 'UsersController@editProfile')->name('profile.edit');
Route::post('/user/update/{id}', 'UsersController@update')->name('user.update');
Route::post('/profile/update/{id}', 'UsersController@updateProfile')->name('profile.update');
Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');


Route::get('/change_active/{id}/{type}', 'HomeController@change_active')->name('user.change_active');





###########   COINS ######
Route::get('/home', 'CoinsController@index')->name('home');
Route::get('coins/create', 'CoinsController@create')->name('coin.add');
###########   COINS   #########

Route::get('coins/create', 'CoinsController@create')->name('coin.add');
Route::post('/coins/store', 'CoinsController@store')->name('coins.store');
Route::get('/coins/show', 'admin\CoinsController@show')->name('coins.show');
Route::get('/coins/details/{id}', 'admin\CoinsController@details')->name('coins.details');
Route::get('/coins/delete/{id}', 'admin\CoinsController@destroy')->name('coins.delete');
Route::get('/coins/edit/{id}', 'admin\CoinsController@edit')->name('coins.edit');
Route::post('/coins/update/{id}', 'admin\CoinsController@update')->name('coins.update');
Route::get('/coins/promoted/{id}/{type}', 'admin\CoinsController@promoted')->name('coins.promoted');

       ###   Coins-Voting  ####
Route::post('/coinsVoting/store/{id}', 'CoinsVotingController@store')->name('coinsVoting.store');


######3#### Promote ######
Route::get('/promote', 'PromoteController@index')->name('promote');
Route::get('/mycoins', 'CoinsController@show')->name('mycoins');
Route::get('/usercoins/{id}', 'admin\CoinsController@user_conins')->name('user.coins');
Route::get('/new/coins', 'admin\CoinsController@new_coins')->name('new.coins');
Route::get('/coins/accept/{id}', 'admin\CoinsController@accept_coin')->name('coins.accept');
Route::get('/coins/reject/{id}', 'admin\CoinsController@reject_coin')->name('coins.reject');

