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
// rota sem parametros
Route::get('/hello',function (){
    return 'hello world';
});
// rota com parametro
Route::get('/saudacoes/{nome}', function($nome){
    return 'Olá' . $nome;
});
// rota com parametro opcional
Route::get('/multiplicacao/{numero1}/{numero2?}',function($numero1,$numero2=null){
if ($numero2 !=null) {
    echo $numero1 * $numero2;
}else{
    echo 'faltou o segundo numero';
}
});
Route::get('/view',function(){
   return view('minhaPrimeira'); 
});

Route::get('/view-parametro/{nome}',function($nome){
    return view('minhaSegunda')->with('nomeBlade',$nome);
});
//Route::get('/posso-entrar/{idade}',)
Route::get('/filmes','FilmesController@exibirTodos');
Route::get('/filmes/{id}','FilmesController@exibirDetalhes');

Route::get('/filme/adicionar','FilmesController@adicionarFilme');// abre o formulario para usuario
Route::post('/filme/adicionar','FilmesController@salvarFilme'); // rota para colher os dados

Route::get('/filme/editar/{id}','FilmesController@editarfilme');
Route::post('/filme/editar/{id}','filmesController@gravarFilme');

Route::get('/filme/excluir/{id}','FilmesController@excluirFilme');
