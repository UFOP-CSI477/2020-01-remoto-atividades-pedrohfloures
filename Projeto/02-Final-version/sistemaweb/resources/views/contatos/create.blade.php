@extends('principal')

@section('conteudo')


<form action="{{ route('contatos.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="form-group">
        <label for="cargo">Cargo</label>
        <input type="text" class="form-control" name="cargo" id="cargo">
    </div>

    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="(##) #########" onkeyup="mascara('(##) #########',this,event,true)" maxlength="14">
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

@endsection