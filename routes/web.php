<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/challanges', 'ChallangeController@index')->name('challanges.index');
Route::get('/challanges/create', 'ChallangeController@create')->name('challanges.create');

Auth::routes();
Route::get('/profiles/{user}', 'ProfileController@index')->name('profile.index');
Route::get('/home', 'ChallangeController@index')->name('challanges.index');

