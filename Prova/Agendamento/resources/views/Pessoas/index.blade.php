@extends('principal')

@section('conteudo')

    <div class="alert alert-primary text-center">
        <a href="{{route('pessoas.create')}}">Cadastrar</a>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection('conteudo')