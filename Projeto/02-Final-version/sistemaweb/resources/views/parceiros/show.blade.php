@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Dados do Parceiro</h2>
        </div>
</div>

<div class="card-header">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th colspan="2" class="text-center">{{$parceiro->nome}}</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><b>ID</b></td>
                    <td>{{ $parceiro->id }}</td>
                </tr>
                <tr>
                    <td><b>Nome</b></td>
                    <td>{{ $parceiro->nome }}</td>
                </tr>
                <tr>
                    <td><b>Endereço</b></td>
                    <td>{{ $parceiro->endereco }}</td>
                </tr>
                <tr>
                    <td><b>Telefone</b></td>
                    <td>{{ $parceiro->telefone  }}</td>
                </tr>
                <tr>
                    <td><b>Benefício</b></td>
                    <td>{{ $parceiro->beneficio }}</td>
                </tr>
                <tr>
                    <td><b>Logo</b></td>
                    <td><img src="{{ $parceiro->logo }}" class="img-fluid" alt="..." title="Logo do {{ $parceiro->nome }}" style="float:center;width:200px"></td>
                </tr>
        </tbody>
    </table>





</div>

<div class="card-footer text-right">

    <form name="frmDelete"
        action="{{ route('parceiros.destroy', $parceiro->id)}}"
        method="post"
        onsubmit="return confirm('Confirma a exclusão do parceiro?');">

        @csrf
        @method('DELETE')
        <a href="{{route('parceiros.edit', $parceiro->id)}}" class="btn btn-warning">Editar</a>
        <input type="submit" value="Excluir" class="btn btn-danger">
        <a href="{{route('parceiros.index')}}" class="btn btn-dark">Voltar</a>
    </form>
</div>
@endsection