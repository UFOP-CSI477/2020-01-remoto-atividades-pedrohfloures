@extends('principal')

@section('conteudo')

<div align="center">
    <h1>Dados da Entidade</h1>

    <p><b>Id:</b> {{ $entidade->id }}</p>
    <p><b>Nome:</b> {{ $entidade->nome }}</p>
    <p><b>CNPJ:</b> {{ $entidade->cpnj }}</p>
    <p><b>Descrição:</b> {{ $entidade->descricao }}</p>
    <p><b>Endereço:</b> {{ $entidade->endereco }}</p>

    <p><b>Contato:</b> {{ $entidade->contato->nome}}</p>
    <br>
    <a href="{{route('entidades.edit', $entidade->id)}}" class="btn btn-outline-warning">Editar</a>

    <a href="{{route('entidades.index')}}" class="btn btn-outline-dark">Voltar</a>
    <br><br>
    <form name="frmDelete"
        action="{{ route('entidades.destroy', $entidade->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão da entidade?');">

        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir" class="btn btn-danger">

    </form>
</div>
@endsection