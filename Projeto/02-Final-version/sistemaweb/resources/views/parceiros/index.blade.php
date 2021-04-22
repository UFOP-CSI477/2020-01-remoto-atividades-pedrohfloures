@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Parceiros</h2>
        </div>
</div>


<div class="card-header table-responsive">

    <table class="table table-bordered table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Benefício</th>
                <th>Logo</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($parceiros as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }} </td>
                    <td>{{ $p->endereco }}</td>
                    <td>{{ $p->telefone }}</td>
                    <td>{{ $p->beneficio }}</td>
                    <td class="text-center"><img src="{{ $p->logo }}" class="img-fluid" alt="..." title="Logo do {{ $p->nome }}" style="float:center;width:75px"></td>
                    <td><a href="{{route('parceiros.show', $p->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

    <div class="card-footer text-right">
        <a href="{{ route('parceiros.create') }}" class= "btn btn-success">Cadastrar</a>
    </div>
@endsection