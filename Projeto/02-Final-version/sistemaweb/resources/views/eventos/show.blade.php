@extends('principal')

@section('conteudo')

<div align="center">
    <h1>Dados do Evento</h1>

    <p><b>Id:</b> {{ $evento->id }}</p>
    <p><b>Nome:</b> {{ $evento->nome }}</p>
    <p><b>Data de início:</b> {{ $evento->datainicio }}</p>
    <p><b>Data de término:</b> {{ $evento->datafim }}</p>
    <p><b>Tipo:</b> {{ $evento->tipo }}</p>
    <p><b>Local:</b> {{ $evento->local }}</p>
    <p><b>Valor:</b> {{ $evento->valor }}</p>
    <p><b>Descrição:</b> {{ $evento->descricao }}</p>
    <p><b>Contato:</b> {{ $evento->contato->nome  }}</p>
    <br>

    <a href="{{route('eventos.edit', $evento->id)}}" class="btn btn-outline-warning">Editar</a>

    <a href="{{route('eventos.index')}}" class="btn btn-outline-dark">Voltar</a>
    <br><br>
    <form name="frmDelete"
        action="{{ route('eventos.destroy', $evento->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão do evento?');">

        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir" class="btn btn-danger">

    </form>
</div>
@endsection