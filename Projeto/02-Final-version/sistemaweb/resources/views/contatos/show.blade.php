@extends('principal')

@section('conteudo')

<div align="center">
    <h1>Dados do Contato</h1>

    <p><b>Id:</b> {{ $contato->id }}</p>
    <p><b>Nome:</b> {{ $contato->nome }}</p>
    <p><b>Cargo:</b> {{ $contato->cargo }}</p>
    <p><b>Telefone:</b> {{ $contato->telefone }}</p>
    <p><b>E-mail:</b> {{ $contato->email }}</p>

    <br>
    <a href="{{route('contatos.edit', $contato->id)}}" class="btn btn-outline-warning">Editar</a>

    <a href="{{route('contatos.index')}}" class="btn btn-outline-dark">Voltar</a>
    <br><br>
    <form name="frmDelete"
        action="{{ route('contatos.destroy', $contato->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão do contato?');">

        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir" class="btn btn-danger">

    </form>
</div>
@endsection