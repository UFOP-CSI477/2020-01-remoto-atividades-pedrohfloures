@extends('principal')



@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Produtos</h2>
        </div>
</div>


<div class="card-header table-responsive">

    <table class="table table-bordered table-hover ">
        <thead class="thead-dark text-center">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Valor Sócio</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Descrição</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($produtos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }} </td>
                    <td>{{ $p->valorSocio }}</td>
                    <td>{{ $p->valor }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td><a href="{{route('produtos.show', $p->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
<div class="card-footer text-right">
        <a href="{{ route('produtos.create') }}" class= "btn btn-success">Cadastrar</a>
</div>
@endsection