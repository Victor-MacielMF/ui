<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Alter;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ProdutoController;

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
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::post('/registrar',[RegisterController::class, 'Redirect']);
Route::post('/cadastrando',[RegisterController::class,'create']);
Route::get('/produtos', [ProdutoController::class,'showCategorias']);
Route::get('/produtos-{id}', [ProdutoController::class,'index']);
Route::get('/produto-{id}', [ProdutoController::class, 'show'])->name('/produto/{id}');
Route::get('/selecionou', [ProdutoController::class, 'selecionou']);
Route::get('/selecionado', [ProdutoController::class, 'selecionado']);
Route::get('/showCategoria', [ProdutoController::class, 'showCategoria']);
Route::post('/storeCategoria', [ProdutoController::class, 'storeCategoria']);

Route::get('/meus-dados', [Alter::class, 'index'])->middleware('auth');
Route::delete('/endereco/{id}', [Alter::class, 'destroy'])->middleware('auth');
Route::put('/endereco/update/{id}', [Alter::class, 'updateAddress'])->middleware('auth');
Route::put('/user/update/{id}', [Alter::class, 'updateUser'])->middleware('auth');
Route::post('/add/address',[Alter::class,'storeAddress'])->middleware('auth');
Route::get('change-password', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password')->middleware('auth');
Route::post('/comentar',[ProdutoController::class,'comentar'])->middleware('auth');
Route::post('/responder',[ProdutoController::class,'responder'])->middleware('auth');
Route::delete('/pergunta/excluir/{id}', [ProdutoController::class, 'excluirPergunta'])->middleware('auth');
Route::delete('/resposta/excluir/{id}', [ProdutoController::class, 'excluirResposta'])->middleware('auth');
Route::get('/escolha', [ProdutoController::class, 'choose'])->middleware('auth');
Route::get('/vender-produto',[ProdutoController::class, 'venderProduto'])->middleware('auth');
Route::get('/caracteristica-{id}',[ProdutoController::class, 'caracteristicaProduto'])->middleware('auth');
Route::delete('/excluir-caracteristica-{id}', [ProdutoController::class, 'excluirCaracteristica'])->middleware('auth');
Route::post('/finalizar-produto',[ProdutoController::class, 'finalizarProduto1'])->middleware('auth');
Route::post('/finish-product',[ProdutoController::class, 'finalizarProduto2'])->middleware('auth');
Route::post('/finalizar-{id}',[ProdutoController::class, 'cancelarCaracteristica'])->middleware('auth');
Route::post('/produto-cadastrar',[ProdutoController::class,'storeProduto'])->middleware('auth');
Route::post('/cadastrar-caracteristica',[ProdutoController::class,'storeCaracteristica'])->middleware('auth')->name('storeCaracteristica');
Route::get('/caracteristicas-{id}',[ProdutoController::class,'showCaracteristicas'])->middleware('auth')->name('/caracteristicas');

