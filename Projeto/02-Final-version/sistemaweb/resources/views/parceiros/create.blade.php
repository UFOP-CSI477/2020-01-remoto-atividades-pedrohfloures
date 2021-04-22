@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Cadastrar Parceiro</h2>
        </div>
</div>

<div class="card-header">
    <form action="{{ route('parceiros.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="(##) #########" onkeyup="mascara('(##) #########',this,event,true)" maxlength="14">
        </div>

        <div class="form-group">
            <label for="beneficio">Benefício</label>
            <input type="text" class="form-control" name="beneficio" id="beneficio">
        </div>

        <div class="form-group">
            <label for="logo">Link da logo</label>
            <input type="text" class="form-control" name="logo" id="logo">
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <input type="reset" value="Limpar" class="btn btn-danger">
            <a href="{{route('parceiros.index')}}" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>
@endsection