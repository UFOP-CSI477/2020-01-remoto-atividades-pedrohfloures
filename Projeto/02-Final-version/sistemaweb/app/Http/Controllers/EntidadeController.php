<?php

namespace App\Http\Controllers;

use App\Models\Entidade;
use App\Models\Contato;

use Illuminate\Http\Request;

class EntidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidade = Entidade::orderBy('nome')->get();

        return view('entidades.index', ['entidades' => $entidade]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contatos = Contato::orderBy('nome')->get();
        return view('entidades.create', ['contatos' => $contatos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entidade::create($request->all());
        session()->flash('mensagem', 'Entidade cadastrado com sucesso!');
        return redirect()->route('entidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function show(Entidade $entidade)
    {
        return view('entidades.show', ['entidade' => $entidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidade $entidade)
    {
        $contatos = Contato::orderBy('nome')->get();
        return view('entidades.edit',
            ['entidade' => $entidade,
             'contatos' => $contatos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidade $entidade)
    {
        $entidade->fill($request->all());
        $entidade->save();

        session()->flash('mensagem', 'Entidade atualizada com sucesso!');
        return redirect()->route('entidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidade $entidade)
    {
        $entidade->delete();
        session()->flash('mensagem', 'Entidade excluída com sucesso!');
        return redirect()->route('entidades.index');
    }
}
