@extends('principal')

@section('conteudo')

<form action="{{ route('eventos.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="form-group">
        <label for="datainicio">Data e horário de início</label>
        <input class="form-control" type="text" name="datainicio" id="datainicio" placeholder="##/##/#### - ##:##" onkeyup="mascara('##/##/#### - ##:##',this,event,true)" maxlength="18">
    </div>

    <div class="form-group">
        <label for="datafim">Data e horário de término</label>
        <input class="form-control" type="text" name="datafim" id="datafim" placeholder="##/##/#### - ##:##" onkeyup="mascara('##/##/#### - ##:##',this,event,true)" maxlength="18">
    
    </div>

    <div class="form-group">
        <label for="tipo">Tipo de evento</label>
        <input type="text" class="form-control" name="tipo" id="tipo">
    </div>

    <div class="form-group">
        <label for="local">Local</label>
        <input type="text" class="form-control" name="local" id="local">
    </div>
 
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" class="form-control" name="valor" id="valor">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
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