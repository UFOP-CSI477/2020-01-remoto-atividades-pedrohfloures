<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::orderBy('nome')->get();

        return view('contatos.index', ['contatos' => $contatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contato::create($request->all());
        session()->flash('mensagem', 'Contato cadastrado com sucesso!');
        return redirect()->route('contatos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        return view('contatos.show', [ 'contato' => $contato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato)
    {
        return view('contatos.edit', [ 'contato' => $contato ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contato $contato)
    {
        $contato->fill($request->all());
        $contato->save();

        session()->flash('mensagem', 'Contato atualizado com sucesso!');
        return redirect()->route('contatos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato)
    {
        if( $contato->entidades->count() > 0)
        {
            session()->flash('erro', 'Exclusao não perimitida, existe uma entidade associada !');
        }else{
            $contato->delete();
        
            session()->flash('mensagem', 'Contato excluido com sucesso!');    
        }


        return redirect()->route('contatos.index');
    }
}
