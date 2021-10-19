<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Alter;
use App\Http\Controllers\ChangePasswordController;

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
    return view('usuario.teste');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::post('/registrar',[RegisterController::class, 'Redirect']);
Route::post('/cadastrando',[RegisterController::class,'create']);
Route::get('/meus-dados', [Alter::class, 'index'])->middleware('auth');
Route::delete('/endereco/{id}', [Alter::class, 'destroy'])->middleware('auth');
Route::put('/endereco/update/{id}', [Alter::class, 'updateAddress'])->middleware('auth');
Route::put('/user/update/{id}', [Alter::class, 'updateUser'])->middleware('auth');
Route::post('/add/address',[Alter::class,'storeAddress']);
Route::get('change-password', [ChangePasswordController::class, 'index']);
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');