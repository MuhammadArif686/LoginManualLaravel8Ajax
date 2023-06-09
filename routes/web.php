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
    return view('login');
});

// Route::get('/register', '\App\Http\Controllers\RegisterController@index')->name('register.index');
// Route::post('/register', '\App\Http\Controllers\RegisterController@store')->name('register.store');

Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('register.index');
Route::post('/register', 'App\Http\Controllers\RegisterController@store')->name('register.store');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@check_login')->name('login.check_login');


Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');
Route::get('/logout', 'App\Http\Controllers\DashboardController@logout')->name('dashboard.logout');

