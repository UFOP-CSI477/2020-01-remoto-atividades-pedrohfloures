@extends('principal')

@section('conteudo')



    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Data</th>
                <th>Título</th>
                <th>Mensagem</th>
                <th>Imagem</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>

            @foreach($avisos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->created_at }}</td>
                    <td>{{ $a->titulo }} </td>
                    <td>{{ $a->texto }}</td>
                    <td><img src="{{ $a->imagem }}" class="img-fluid" alt="..." title="Logo do {{ $a->imagem }}" style="float:center;width:75px"></td>
                    <td><a href="{{route('avisos.show', $a->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <a href="{{ route('avisos.create') }}" class= "btn btn-outline-success">Cadastrar</a>
    </div>
@endsection