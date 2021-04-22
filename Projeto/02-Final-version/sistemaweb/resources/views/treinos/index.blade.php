@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Treinos</h2>
        </div>
</div>

<div class="card-header table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Modalidade</th>
                <th>Dia e horário</th>
                <th>Local</th>
                <th>Contato</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($treinos as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->modalidade }} </td>
                    <td>{{ $t->data }}</td>
                    <td>{{ $t->local }}</td>
                    <td>{{ $t->contato->nome }}</td>
                    <td><a href="{{route('treinos.show', $t->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card-footer text-right">
    <a href="{{ route('treinos.create') }}" class= "btn btn-success">Cadastrar</a>
</div>
@endsection