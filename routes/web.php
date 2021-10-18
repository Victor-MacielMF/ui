<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Alter;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();


Route::get('/entrar',[LoginController::class, 'index']);
Route::post('/registrar',[RegisterController::class, 'Redirect']);
Route::post('/cadastrando',[RegisterController::class,'create']);
Route::get('/meus-dados', [Alter::class, 'index'])->middleware('auth');

