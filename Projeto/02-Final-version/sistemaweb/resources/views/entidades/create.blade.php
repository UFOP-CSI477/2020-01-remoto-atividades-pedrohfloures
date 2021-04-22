@extends('principal')

@section('conteudo')

<form action="{{ route('entidades.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="form-group">
        <label for="cpnj">CNPJ</label>
        <input class="form-control" type="text" name="cpnj" id="cpnj" placeholder="##.###.###/####-##" onkeyup="mascara('##.###.###/####-##',this,event,true)" maxlength="18">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco">
    </div>

    <div class="form-group">
        <label for="contato_id">Contato</label>
      
        <select name="contato_id" id="contato_id" class="form-control">
      
        @foreach($contatos as $c)
            <option value="{{$c->id}}">{{$c->nome}}</option>
        @endforeach

        </select>

    </div>

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

@endsection