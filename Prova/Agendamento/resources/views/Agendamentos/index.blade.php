@extends('principal')

@section('conteudo')

    <div class="alert alert-primary text-center">
        <a href="{{route('agendamentos.create')}}">Cadastrar</a>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Data</th>
                <th>Nome da pessoa</th>
                <th>Tipo sang.</th>
                <th>Nome da coleta</th>
                <th>Nome da cidade</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->data }}</td>
                    <td>{{ $a->pessoa->nome }}</td>
                    <td>{{ $a->pessoa->tipo }}</td>
                    <td>{{ $a->coleta->nome }}</td>
                    <td>{{ $a->coleta->cidade }}</td>
                    <td><a href="{{ route('agendamentos.show', $a->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection('conteudo')