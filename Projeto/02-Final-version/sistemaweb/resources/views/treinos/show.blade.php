@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Dados do Treino</h2>
        </div>
</div>

<div class="card-header">

<table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th colspan="2" class="text-center">{{$treino->modalidade}}</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><b>ID</b></td>
                    <td>{{ $treino->id }}</td>
                </tr>
                <tr>
                    <td><b>Modalidade</b></td>
                    <td>{{ $treino->modalidade }}</td>
                </tr>
                <tr>
                    <td><b>Dia e horário</b></td>
                    <td>{{ $treino->data }}</td>
                </tr>
                <tr>
                    <td><b>Local</b></td>
                    <td>{{ $treino->local }}</td>
                </tr>
                <tr>
                    <td><b>Contato</b></td>
                    <td>{{ $treino->contato->nome }}</td>
                </tr>
        </tbody>
</table>



    <div class="card-footer text-right">
        <form name="frmDelete"
            action="{{ route('treinos.destroy', $treino->id)}}"
            method="post"
            onsubmit="return confirm('Confirma a exclusão do treino?');">

            @csrf
            @method('DELETE')
            <a href="{{route('treinos.edit', $treino->id)}}" class="btn btn-warning">Editar</a>
            <input type="submit" value="Excluir" class="btn btn-danger">
            <a href="{{route('treinos.index')}}" class="btn btn-dark">Voltar</a>
        </form>
    </div>
</div>
@endsection