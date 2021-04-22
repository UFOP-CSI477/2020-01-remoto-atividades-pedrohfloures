@extends('principal')

@section('conteudo')

    <div class="alert alert-primary text-center">
        <a href="{{route('coletas.create')}}">Cadastrar</a>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coletas as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->cidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection('conteudo')