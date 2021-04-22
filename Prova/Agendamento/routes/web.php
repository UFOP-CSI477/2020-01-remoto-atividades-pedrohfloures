<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pessoa;
use App\Http\Controllers\PessoaController;
use App\Models\Coleta;
use App\Http\Controllers\ColetaController;
use App\Models\Agendamento;
use App\Http\Controllers\AgendamentoController;
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

Route::resource('/pessoas', PessoaController::class)->middleware('auth');
Route::resource('/coletas', ColetaController::class)->middleware('auth');
Route::resource('/agendamentos', AgendamentoController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
