@extends('principal')

@section('conteudo')

<div class="card">
<div class="card-header text-center">
<h1>Dados do Equipamento</h1>

<p>Id: {{ $equipamento->id }}</p>
<p>Nome: {{ $equipamento->nome }}</p>

<form name="frmDelete"
      action="{{route('equipamentos.destroy', $equipamento->id)}}"
      method="post"
      onsubmit="return confirm('Confirma exclusão do equipamento?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">
    
<a href="{{route('equipamentos.edit', $equipamento->id)}}">Editar</a>
<a href="{{ route('equipamentos.index') }}">Voltar</a>
</form>
</div>
<div class="card-header text-center">
<h3>Registros associados:</h3>
</div>
<table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Data Limite</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $reg)
              @if($reg->equipamento_id == $equipamento->id)
                <tr>
                    <td>{{ $reg->datalimite }}</td>
                    <td>{{ $reg->equipamento->nome }}</td>
                    <td>{{ $reg->user->name }}</td>
                    @if($reg->tipo == 1)
                        <td>1 - Preventiva</td>
                    @endif
                    @if($reg->tipo == 2)
                        <td>2 - Corretiva</td>
                    @endif
                    @if($reg->tipo == 3)
                        <td>3 - Urgente</td>
                    @endif

                    <td>{{ $reg->descricao }}</td>
                    <td><a href="{{route('registros.show', $reg->id)}}">Exibir</a></td>
                </tr>
              @endif
            @endforeach
        </tbody>
</table>



</div>
@endsection