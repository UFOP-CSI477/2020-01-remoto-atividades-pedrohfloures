@extends('principal')

@section('conteudo')

<meta http-equiv="Refresh" content="0; url='{{route('avisos.update', $aviso->id)}}'" />

@endsection