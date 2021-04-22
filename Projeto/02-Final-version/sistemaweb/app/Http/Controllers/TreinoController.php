<?php

namespace App\Http\Controllers;

use App\Models\Treino;
use Illuminate\Http\Request;
use App\Models\Contato;

class TreinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treino = Treino::orderBy('nome')->get();

        return view('treinos.index', ['treinos' => $treino]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contatos = Contato::orderBy('nome')->get();
        return view('treinos.create', ['contatos' => $contatos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Treino::create($request->all());
        session()->flash('mensagem', 'Treino cadastrado com sucesso!');
        return redirect()->route('treinos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function show(Treino $treino)
    {
        return view('treinos.show', ['treino' => $treino]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function edit(Treino $treino)
    {
        $contatos = Contato::orderBy('nome')->get();
        return view('treinos.edit',
            ['treino' => $treino,
             'contatos' => $contatos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treino $treino)
    {
        $treino->fill($request->all());
        $treino->save();

        session()->flash('mensagem', 'Treino atualizado com sucesso!');
        return redirect()->route('treinos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treino  $treino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treino $treino)
    {
        $treino->delete();
        session()->flash('mensagem', 'Treino excluído com sucesso!');
        return redirect()->route('treinos.index');
    }
}
