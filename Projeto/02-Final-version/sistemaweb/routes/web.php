<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use App\Models\Parceiro;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ParceiroController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EntidadeController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\AvisoController;
use App\Http\Controllers\TreinoController;

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
    return view('principal');
})->name('principal')->middleware('auth');

Route::resource('/produtos', ProdutoController::class)->middleware('auth');

Route::resource('/parceiros', ParceiroController::class)->middleware('auth');

Route::resource('/contatos', ContatoController::class)->middleware('auth');

Route::resource('/entidades', EntidadeController::class)->middleware('auth');

Route::resource('/eventos', EventoController::class)->middleware('auth');

Route::resource('/avisos', AvisoController::class)->middleware('auth');

Route::resource('/treinos', TreinoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/usuarios', function () {
    return view('usuarios', [ 'usuarios' => $usuarios ]);
})->name('usuarios')->middleware('auth');