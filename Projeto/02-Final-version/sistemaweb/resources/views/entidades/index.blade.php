@extends('principal')

@section('conteudo')



    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CPNJ</th>
                <th>Descrição</th>
                <th>Endereço</th>
                <th>Contato</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($entidades as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }} </td>
                    <td>{{ $e->cpnj }}</td>
                    <td>{{ $e->descricao }}</td>
                    <td>{{ $e->endereco }}</td>
                    <td>{{ $e->contato->nome }}</td>
                    <td><a href="{{route('entidades.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <a href="{{ route('entidades.create') }}" class= "btn btn-outline-success">Cadastrar</a>
    </div>
@endsection