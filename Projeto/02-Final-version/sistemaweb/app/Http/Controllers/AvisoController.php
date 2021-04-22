<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use Illuminate\Http\Request;

class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aviso = Aviso::orderBy('nome')->get();

        return view('avisos.index', ['avisos' => $aviso]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('avisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aviso::create($request->all());
        session()->flash('mensagem', 'Aviso cadastrado com sucesso!');
        return redirect()->route('avisos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function show(Aviso $aviso)
    {
        return view('avisos.show', [ 'aviso' => $aviso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function edit(Aviso $aviso)
    {
        session()->flash('erro', 'Não é possível editar avisos!');
        return view('avisos.edit', [ 'aviso' => $aviso ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aviso $aviso)
    {

        session()->flash('erro', 'Não é possível editar avisos!');
        return redirect()->route('avisos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aviso  $aviso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aviso $aviso)
    {
        $aviso->delete();
        session()->flash('mensagem', 'Aviso excluído com sucesso!');
        return redirect()->route('avisos.index');
    }
}
