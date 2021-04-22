@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Cadastrar Treino</h2>
        </div>
</div>

<div class="card-header">
<form action="{{ route('treinos.store')}}" method="post">

    @csrf

    <div class="row align-items-center">
        <div class="col">
            <label for="modalidade">Modalidade</label>
            <input type="text" class="form-control" name="modalidade" id="modalidade">
        </div>
        <div class="col">
            <label for="data">Dia e horário</label>
            <input type="text" class="form-control" name="data" id="data">
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col">
            <label for="local">Local</label></label>
            <input type="text" class="form-control" name="local" id="local">
        </div>
        
        <div class="col">
            <label for="contato_id">Contato</label>

            <select name="contato_id" id="contato_id" class="form-control">

            @foreach($contatos as $c)
                <option value="{{$c->id}}">{{$c->nome}}</option>
            @endforeach

            </select>
        </div>
    </div>
</div>    
    <div class="card-footer text-right">
        <input type="submit" value="Cadastrar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
        <a href="{{route('treinos.index')}}" class="btn btn-dark">Voltar</a>
    </div>

</form>

@endsection