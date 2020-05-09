<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('clients', 'ClientController@getIndex')->name('clients');
Route::get('clients/new', 'ClientController@getCreate')->name('clients.new');
Route::get('clients/{client}', 'ClientController@getEdit')->name('clients.edit');
Route::post('clients/save', 'ClientController@postSave')->name('clients.save');

// delete clients
Route::delete('clients/destroy', 'ClientController@destroy')->name('clients.destroy');

Route::any('rooms/{clientId}', 'RoomsController@checkAvailableRooms')->name('rooms.availibilty');
Route::get('reservations', 'ReservationsController@getIndex')->name('reservations');
Route::get('reservations/new/{client}', 'ReservationsController@getCreate')->name('reservations.new');
Route::get('reservations/edit', 'ReservationsController@getEdit')->name('reservations.dateaddapt');

Route::delete('reservations/destroy', 'ReservationsController@destroy')->name('reservations.destroy');
Route::post('reservations/save', 'ReservationsController@postSave')->name('reservations.save');

Auth::routes();
