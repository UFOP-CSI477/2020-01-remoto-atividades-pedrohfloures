@extends('principal')

@section('conteudo')
<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Equipamentos</h2>
        </div>
</div>
    <div class="alert alert-primary text-center">
        <a href="{{route('equipamentos.create')}}">Cadastrar</a>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Relatórios</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipamentos as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }}</td>
                    <td><a href="{{route('equipamentos.show', $e->id)}}">Acessar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection('conteudo')