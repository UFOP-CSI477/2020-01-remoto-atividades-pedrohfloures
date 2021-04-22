@extends('principal')

@section('conteudo')

<form action="{{ route('eventos.update', $evento->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $evento->nome }}">
    </div>

    <div class="form-group">
        <label for="datainicio">Data e horário de início</label>
        <input class="form-control" type="text" name="datainicio" id="datainicio" placeholder="##/##/#### - ##:##" onkeyup="mascara('##/##/#### - ##:##',this,event,true)" maxlength="18" value="{{ $evento->datainicio }}">
    
    </div>
    <div class="form-group">
        <label for="datafim">Data e horário de término</label>
        <input class="form-control" type="text" name="datafim" id="datafim" placeholder="##/##/#### - ##:##" onkeyup="mascara('##/##/#### - ##:##',this,event,true)" maxlength="18" value="{{ $evento->datafim }}">
    
    </div>
    <div class="form-group">
        <label for="tipo">Tipo de evento</label>
        <input type="text" class="form-control" name="tipo" id="tipo" value="{{ $evento->tipo }}">
    </div>
    <div class="form-group">
        <label for="local">Local</label>
        <input type="text" class="form-control" name="local" id="local" value="{{ $evento->local }}">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" class="form-control" name="valor" id="valor" value="{{ $evento->valor }}">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $evento->descricao }}">
    </div>


    <div class="form-group">
        <label for="contato_id">Contato</label>

        <select name="contato_id" id="contato_id" class="form-control">

        @foreach($contatos as $c)
            <option value="{{$c->id}}"

            @if($evento->contato_id == $c->id)
                selected
            @endif

            >{{$c->nome}}</option>
        @endforeach

        </select>
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

@endsection