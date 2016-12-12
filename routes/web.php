<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',                 'FrontController@overview')->name('overview');
Route::get('/entrada',          'FrontController@post');
Route::get('/crear-entrada',    'FrontController@createPost')->name('createPost')->middleware('user');
Route::get('/categoria',        'FrontController@category');
Route::get('/crear-categoria',  'FrontController@createCategory');
Route::get('/acceder',          'FrontController@login')->name('login')->middleware('guest');
Route::get('/registro',         'FrontController@register')->name('register')->middleware('guest');
Route::get('/recuperar-cuenta', 'FrontController@passwordRecovery')->name('passwordRecovery')->middleware('guest');
Route::get('/cerrar-sesion',    'FrontController@logout')->name('logout')->middleware('user')->middleware('user');
Route::get('/perfil',           'FrontController@profile')->name('profile')->middleware('user')->middleware('user');

Route::post('/register-user',   'DataController@registerUser')->name('registerUser');
Route::post('/login-user',      'DataController@loginUser')->name('loginUser');
Route::post('/update-user',     'DataController@updateUser')->name('updateUser')->middleware('user');
Route::post('/register-post',   'DataController@registerPost')->name('registerPost')->middleware('user');
