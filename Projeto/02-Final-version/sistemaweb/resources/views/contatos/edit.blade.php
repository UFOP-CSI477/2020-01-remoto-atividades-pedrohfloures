@extends('principal')

@section('conteudo')
<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Editar Contato</h2>
            <h5 class="card-title text-center">{{$contato->nome}}</h5>
        </div>
</div>

<div class="card-header">
<form action="{{ route('contatos.update', $contato->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $contato->nome }}">
    </div>

    <div class="form-group">
        <label for="cargo">Cargo</label>
        <input type="text" class="form-control" name="cargo" id="cargo" value="{{ $contato->cargo }}">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="(##) #########" onkeyup="mascara('(##) #########',this,event,true)" maxlength="14" value="{{ $contato->telefone }}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ $contato->email }}">
    </div>


    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
        <a href="{{route('contatos.show', $contato->id)}}" class="btn btn-dark">Voltar</a>
    </div>

</form>
</div>

@endsection