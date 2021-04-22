<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Registro;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamento = Equipamento::orderBy('nome')->get();

        return view('equipamentos.index', ['equipamentos' => $equipamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Equipamento::create($request->all());
        session()->flash('mensagem', 'Equipamento cadastrado com sucesso!');
        return redirect()->route('equipamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        $registros = Registro::orderBy('datalimite')->get();
        return view('equipamentos.show', ['equipamento' => $equipamento, 'registros' => $registros]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
        return view('equipamentos.edit',
            ['equipamento' => $equipamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        $equipamento->fill($request->all());
        $equipamento->save();

        session()->flash('mensagem', 'Equipamento atualizado!');
        return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        if( $equipamento->registros->count() > 0)
        {
            session()->flash('erro', 'Exclusao não perimitida, existe um registro associado!');
        }else{
            $equipamento->delete();
        
            session()->flash('mensagem', 'Equipamento excluído!');    
        }
        
        return redirect()->route('equipamentos.index');
    }
}
