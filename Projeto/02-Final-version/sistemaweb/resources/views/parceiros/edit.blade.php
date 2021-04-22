@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Editar Parceiro</h2>
            <h5 class="card-title text-center">{{$parceiro->nome}}</h5>
        </div>
</div>

<div class="card-header">
<form action="{{ route('parceiros.update', $parceiro->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $parceiro->nome }}">
    </div>

    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" value="{{ $parceiro->endereco }}">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="(##) #########" onkeyup="mascara('(##) #########',this,event,true)" maxlength="14" value="{{ $parceiro->telefone }}">
    </div>
    <div class="form-group">
        <label for="beneficio">Benefício</label>
        <input type="text" class="form-control" name="beneficio" id="beneficio" value="{{ $parceiro->beneficio }}">
    </div>
    <div class="form-group">
        <label for="logo">Link da logo</label>
        <input type="text" class="form-control" name="logo" id="logo" value="{{ $parceiro->logo }}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
        <a href="{{route('parceiros.show', $parceiro->id)}}" class="btn btn-dark">Voltar</a>
    </div>

</form>
</div>
@endsection