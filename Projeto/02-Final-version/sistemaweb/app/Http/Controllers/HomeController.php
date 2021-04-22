<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aviso;
use App\Models\Entidade;
use App\Models\Evento;
use App\Models\Parceiro;
use App\Models\Produto;
use App\Models\Treino;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $entidades = Entidade::orderby('nome')->get();
        $eventos = Evento::orderby('nome')->get();
        $parceiros = Parceiro::orderby('nome')->get();
        $produtos = Produto::orderby('nome')->get();
        $treinos = Treino::orderby('nome')->get();
        return view('home', ['parceiros' => $parceiros, 'entidades' => $entidades, 'eventos' => $eventos,
        'produtos' => $produtos, 'treinos' => $treinos]);
    }
}
