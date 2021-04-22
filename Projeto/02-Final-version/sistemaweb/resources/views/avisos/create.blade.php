@extends('principal')

@section('conteudo')

<form action="{{ route('avisos.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo">
    </div>

    <div class="form-group">
        <label for="texto">Mensagem</label>
        <input type="text" class="form-control" name="texto" id="texto">
    </div>

    <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="text" class="form-control" name="imagem" id="imagem">
    </div>

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

@endsection