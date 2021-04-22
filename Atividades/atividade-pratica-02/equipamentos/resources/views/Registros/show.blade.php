@extends('principal')

@section('conteudo')

<h1>Dados do Registro</h1>

<p>Id: {{ $registro->id }}</p>
<p>Data: {{ $registro->datalimite }}</p>
<p>Equipamento: {{ $registro->equipamento->nome }}</p>
<p>Usuário: {{ $registro->user->name }}</p>
<p>Tipo:  
  @if($registro->tipo == 1)
    1 - Preventiva
  @endif
  @if($registro->tipo == 2)
    2 - Corretiva
  @endif
  @if($registro->tipo == 3)
    3 - Urgente
  @endif
<p>Descrição: {{ $registro->descricao }}</p>

<a href="{{route('registros.edit', $registro->id)}}">Editar</a>
<a href="{{ route('registros.index') }}">Voltar</a>

<form name="frmDelete"
      action="{{route('registros.destroy', $registro->id)}}"
      method="post"
      onsubmit="return confirm('Confirma exclusão do registro?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>
@endsection