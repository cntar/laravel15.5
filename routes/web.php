<?php

Route::get('logout','Auth\LoginController@logout');

Route::get('screen', 'FrontController@index');
Route::get('decor','FrontController@decor');
// Route::get('login', 'HomeController@index')

Route::get('/', function (){
	return view('welcome');
});

Route::get('/dashboard','DashBoardController@dash');
Route::get('form','DashBoardController@forms');
// Route::get('form','CultureController@create');
Route::post('store','CultureController@store');
Route::get('decor','CultureController@index');
Route::get('screen','CultureController@create');

Route::resource('/cart','CartController');

     //special for admin auth -> middleware verification
Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function () {
    Route::get('/', function () {
        // Uses first & second Middleware
         return view('admin.layout');
    })->name('admin.layout');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//create route for checkout
Route::get('checkout', 'CheckoutController@step1');

Route::get('shipping-info', 'CheckoutController@shipping');
Route::resource('address','AddressController');
Route::get('payment', 'CheckoutController@payment');
//this route is for the card elements
Route::post('storage', 'CheckoutController@storePayment')->name('storage.storePayment');
Route::get('alert','FrontController@alert')->name('alert');
