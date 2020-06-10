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

use App\Http\Controllers\ContactController;

Route::get('/', 'ContactController@index')->name('contacts.index');

// Auth::routes();

// Blade Routes
Route::get('/details/{id}', 'addressController@details')->name('addresses.details');
Route::get('/show/{id}', 'contactController@show')->name('contacts.show');

// Modal routes
Route::get('/edit', 'ContactController@edit')->name('contacts.edit');
Route::get('/delete/{id}', 'ContactController@postDelete')->name('contacts.postDelete');

// MySQL data routes
Route::get('/createAddress', 'ContactController@createAddress')->name('contacts.createAddress');
Route::post('/storeAddress/{contact_id}', 'AddressController@store')->name('addresses.store');
Route::post('/updateAddress/{contact_id}', 'AddressController@edit')->name('addresses.store');
Route::resource('contacts', 'ContactController');
Route::resource('addresses', 'AddressController');