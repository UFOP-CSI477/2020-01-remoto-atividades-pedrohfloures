@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Dados do Produto</h2>
        </div>
</div>
<div class="card-header">

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th colspan="2" class="text-center">{{$produto->nome}}</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><b>ID</b></td>
                    <td>{{ $produto->id }}</td>
                </tr>
                <tr>
                    <td><b>Nome</b></td>
                    <td>{{ $produto->nome }}</td>
                </tr>
                <tr>
                    <td><b>Valor Sócio</b></td>
                    <td>{{ $produto->valorSocio }}</td>
                </tr>
                <tr>
                    <td><b>Valor</b></td>
                    <td>{{ $produto->valor }}</td>
                </tr>
                <tr>
                    <td><b>Quantidade</b></td>
                    <td>{{ $produto->quantidade }}</td>
                </tr>
                <tr>
                    <td><b>Descrição</b></td>
                    <td>{{ $produto->descricao }}</td>
                </tr>
        </tbody>
    </table>



</div>

<div class="card-footer text-right">
    <form name="frmDelete"
        action="{{ route('produtos.destroy', $produto->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão do produto?');">

        @csrf
        @method('DELETE')
        <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-warning">Editar</a>
        <input type="submit" value="Excluir" class="btn btn-danger">
        <a href="{{route('produtos.index')}}" class="btn btn-dark">Voltar</a>
    </form>

</div>




@endsection