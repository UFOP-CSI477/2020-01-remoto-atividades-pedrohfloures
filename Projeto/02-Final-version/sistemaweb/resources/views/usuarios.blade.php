@extends('principal')

@section('conteudo')



    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>

            @foreach($usuarios as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->nome }} </td>
                    <td>{{ $u->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <a href="{{ route('produtos.create') }}" class= "btn btn-outline-success">Cadastrar</a>
    </div>
@endsection