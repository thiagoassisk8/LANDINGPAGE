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

Route::get('/','App\Http\Controllers\PrincipalController@principal');

Route::get('/sobrenos', 'App\Http\Controllers\SobrenosController@sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato');


