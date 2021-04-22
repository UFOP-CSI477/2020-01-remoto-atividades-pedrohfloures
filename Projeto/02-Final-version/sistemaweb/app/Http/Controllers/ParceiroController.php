<?php

namespace App\Http\Controllers;

use App\Models\Parceiro;
use Illuminate\Http\Request;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parceiros = Parceiro::orderBy('nome')->get();

        return view('parceiros.index', ['parceiros' => $parceiros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parceiros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Parceiro::create($request->all());
        session()->flash('mensagem', 'Parceiro cadastrado com sucesso!');
        return redirect()->route('parceiros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function show(Parceiro $parceiro)
    {
        return view('parceiros.show', [ 'parceiro' => $parceiro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function edit(Parceiro $parceiro)
    {
        return view('parceiros.edit', [ 'parceiro' => $parceiro ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parceiro $parceiro)
    {
        $parceiro->fill($request->all());
        $parceiro->save();

        session()->flash('mensagem', 'Parceiro atualizado com sucesso!');
        return redirect()->route('parceiros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parceiro  $parceiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parceiro $parceiro)
    {
        $parceiro->delete();
        session()->flash('mensagem', 'Parceiro excluído com sucesso!');
        return redirect()->route('parceiros.index');
    }
}
