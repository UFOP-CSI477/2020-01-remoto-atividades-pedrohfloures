<?php

use Illuminate\Support\Facades\Route;
use App\Models\Equipamento;
use App\Http\Controllers\EquipamentoController;
use App\Models\Registro;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SuporteController;
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


Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('auth');

Route::resource('/registros', RegistroController::class)->middleware('auth');
Route::resource('/equipamentos', EquipamentoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/suporte', [App\Http\Controllers\SuporteController::class, 'index'])->name('suporte');
