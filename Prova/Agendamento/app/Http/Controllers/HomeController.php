<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Coleta;
use App\Models\Agendamento;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $agendamentos = Agendamento::orderBy('data', 'asc')->orderBy('pessoa_id', 'asc')->get();
        return view('home', ['agendamentos' => $agendamentos]);
    }
}
