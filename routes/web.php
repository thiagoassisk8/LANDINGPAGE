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
Route::get('/teste/{p1}/{p2}','App\Http\Controllers\TesteController@teste');

Route::get('/sobrenos', 'App\Http\Controllers\SobrenosController@sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato');
Route::get('/login', 'App\Http\Controllers\ContatoController@contato');
Route::get('/contato/{nome}/{categoria_id}',
 function(string $nome,
         int $categoria_id=1
         )
         {
    echo"estamos aqui $nome $categoria_id";
         })->where('categoria_id','[0-9]+')->where('categoria_id','[A-Za-z]+');
     

Route::prefix('/app')->group(function(){
     Route::get('/clientes', function(){return "clientes"; });
     Route::get('/fornecedores','App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
     Route::get('/produtos', function(){return "produtos"; });
});

