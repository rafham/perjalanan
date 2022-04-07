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


Route::group(['middleware' =>'auth'], function(){
    Route::get('/', function () {
        return view('layout.app');
    });
    
Auth::routes();

Route::get('/perjalanan', 'PerjalananController@index');
Route::post('/perjalanan/store', 'PerjalananController@store');
Route::get('/perjalanan/delete/{id}', 'PerjalananController@delete');
});

Route::get('/register', 'RegisterController@register')->name('register');
Route::post('/postregister', 'RegisterController@postregister');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/user/{id}', 'UserController@edit');
Route::put('/user/update/{id}', 'UserController@update');
Route::get('/datauser', 'UserController@datauser');
Route::get('/datauser/cetak', 'UserController@cetakpdf');
Route::get('/dashboard', 'UserController@dashboard');
Route::get('/datauser/delete/{id}', 'UserController@delete');
