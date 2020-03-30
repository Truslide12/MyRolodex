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
Route::get('/search', 'ContactController@search')->name('contacts.search');
Route::get('/postSearch', 'ContactController@postSearch')->name('contacts.postSearch');
Route::get('/sort/asc/{field}', 'ContactController@sortUp')->name('contacts.sortUp');
Route::get('/sort/desc/{field}', 'ContactController@sortDown')->name('contacts.sortDown');
Route::get('/sort/{field}/{currentField}/{dir}', 'ContactController@sort')->name('contacts.sort');
Route::get('/details/{column}', 'addressController@details')->name('addresses.details');

// Modal routes
Route::get('/edit', 'ContactController@edit')->name('contacts.edit');
Route::get('/delete', 'ContactController@delete')->name('contacts.delete');

// MySQL data routes
Route::get('/createAddress', 'ContactController@createAddress')->name('contacts.createAddress');
Route::post('/storeAddress/{contact_id}', 'AddressController@store')->name('addresses.store');

Route::post('/contacts/delete', 'ContactController@postDelete');
Route::resource('contacts', 'ContactController');
Route::resource('addresses', 'AddressController');
