@extends('principal')

@section('conteudo')

<div align="center">
    <h1>Dados do Aviso</h1>

    <p><b>Id:</b> {{ $aviso->id }}</p>
    <p><b>Data:</b> {{ $aviso->created_at }}</p>
    <p><b>Endereço:</b> {{ $aviso->titulo }}</p>
    <p><b>Telefone:</b> {{ $aviso->texto }}</p>
    <p><b>Imagem:</b> </p> <img src="{{ $aviso->imagem }}" class="img-fluid" alt="..." title="Logo do {{ $aviso->imagem  }}" style="float:center;width:200px">

    <br>

    <a href="{{route('avisos.index')}}" class="btn btn-outline-dark">Voltar</a>
    <br><br>
    <form name="frmDelete"
        action="{{ route('avisos.destroy', $aviso->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão do aviso?');">

        @csrf
        @method('DELETE')

        <input type="submit" value="Excluir" class="btn btn-danger">

    </form>
</div>
@endsection