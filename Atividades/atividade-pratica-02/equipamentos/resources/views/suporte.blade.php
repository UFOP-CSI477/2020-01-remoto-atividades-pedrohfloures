@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Lista de equipamentos</h2>
        </div>
</div>

<div class="card">
    <div class="card-header">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipamentos as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header">
            <div class="card-title">
                <h2 class="card-title text-center">Manutenções cadastradas para os equipamentos</h2>
            </div>
    </div>

    <div class="card-header">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Data Limite</th>
                    <th>Equipamento</th>
                    <th>Usuário</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $r)
                    <tr>
                        <td>{{ $r->datalimite }}</td>
                        <td>{{ $r->equipamento->nome }}</td>
                        <td>{{ $r->user->name }}</td>
                        @if($r->tipo == 1)
                            <td>1 - Preventiva</td>
                        @endif
                        @if($r->tipo == 2)
                            <td>2 - Corretiva</td>
                        @endif
                        @if($r->tipo == 3)
                            <td>3 - Urgente</td>
                        @endif

                        <td>{{ $r->descricao }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection('conteudo')