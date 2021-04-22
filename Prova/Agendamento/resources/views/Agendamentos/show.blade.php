@extends('principal')

@section('conteudo')

<h1>Dados do agendamento</h1>

<p>Id: {{ $agendamento->id }}</p>
<p>Data: {{ $agendamento->data }}</p>
<p>Pessoa: {{ $agendamento->pessoa->nome }}</p>
<p>Local de coleta: {{ $agendamento->coleta->nome }}</p>
<p>Cidade: {{ $agendamento->coleta->cidade }}</p>
<a href="{{route('agendamentos.edit', $agendamento->id)}}">Editar</a>
<a href="{{ route('agendamentos.index') }}">Voltar</a>

<form name="frmDelete"
      action="{{route('agendamentos.destroy', $agendamento->id)}}"
      method="post"
      onsubmit="return confirm('Confirma exclusão da cidade?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>
@endsection