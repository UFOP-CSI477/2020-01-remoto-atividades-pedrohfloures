@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Eventos</h2>
        </div>
</div>

<div class="card-header table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Data de Início</th>
                <th>Data de Término</th>
                <th>Tipo</th>
                <th>Local</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Contato</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($eventos as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->datainicio }}</td>
                    <td>{{ $e->datafim }}</td>
                    <td>{{ $e->tipo }}</td>
                    <td>{{ $e->local }}</td>
                    <td>{{ $e->valor }}</td>
                    <td>{{ $e->descricao }}</td>
                    <td>{{ $e->contato->nome }}</td>
                    <td><a href="{{route('eventos.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

<div class="card-footer text-right">
        <a href="{{ route('eventos.create') }}" class= "btn btn-success">Cadastrar</a>
    </div>
@endsection