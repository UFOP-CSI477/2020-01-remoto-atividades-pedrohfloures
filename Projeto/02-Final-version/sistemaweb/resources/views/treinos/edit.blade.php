@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Editar Treino</h2>
            <h5 class="card-title text-center">{{$treino->modalidade}}</h5>
        </div>
</div>

<div class="card-header">
<form action="{{ route('treinos.update', $treino->id)}}" method="post">

    @csrf
    @method('PUT')
    <div class="row align-items-center">
        <div class="col">
            <label for="modalidade">Modalidade</label>
            <input type="text" class="form-control" name="modalidade" id="modalidade" value="{{ $treino->modalidade }}">
        </div>
        <div class="col">
            <label for="data">Dia e horário</label>
            <input type="text" class="form-control" name="data" id="data" value="{{ $treino->data }}">
        </div>
    </div>
    <br>
    <div class="row align-items-center">
        <div class="col">
            <label for="local">Local</label></label>
            <input type="text" class="form-control" name="local" id="local" value="{{ $treino->local }}">
        </div>
        
        <div class="col">
            <label for="contato_id">Contato</label>

            <select name="contato_id" id="contato_id" class="form-control">

            @foreach($contatos as $c)
                <option value="{{$c->id}}"

                @if($treino->contato_id == $c->id)
                    selected
                @endif

                >{{$c->nome}}</option>
            @endforeach

            </select>
        </div>
    </div>

    <br>
    </div>
    <div class="card-footer text-right">
        <input type="submit" value="Atualizar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
        <a href="{{route('treinos.show', $treino->id)}}" class="btn btn-dark">Voltar</a>
    </div>

</form>

@endsection