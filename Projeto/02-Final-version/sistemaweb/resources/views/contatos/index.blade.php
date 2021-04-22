@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Contatos</h2>
        </div>
</div>

<div class="card-header table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($contatos as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nome }} </td>
                    <td>{{ $c->cargo }}</td>
                    <td>{{ $c->telefone }}</td>
                    <td>{{ $c->email }}</td>
                    <td><a href="{{route('contatos.show', $c->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card-footer text-right">
        <a href="{{ route('contatos.create') }}" class= "btn btn-success">Cadastrar</a>
    </div>
@endsection