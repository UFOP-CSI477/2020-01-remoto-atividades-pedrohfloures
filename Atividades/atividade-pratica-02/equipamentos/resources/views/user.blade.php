@extends('principal')

@section('conteudo')
<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Usuários</h2>
        </div>
</div>
<div>
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection('conteudo')