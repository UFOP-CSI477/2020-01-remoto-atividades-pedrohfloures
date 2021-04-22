@extends('principal')



@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Relatório de agendamentos</h2>
        </div>
</div>


<div class="card-header table-responsive">

    <table class="table table-bordered table-hover ">
        <thead class="thead-dark text-center">
            <tr>
                <th>Data</th>
                <th>Nome do local</th>
                <th>Cidade</th>
                <th>Nome da pessoa</th>
                <th>Tipo sang.</th>
            </tr>
        </thead>
        <tbody>

            @foreach($agendamentos as $a)
                <tr>
                    <td>{{ $a->data }}</td>
                    <td>{{ $a->coleta->nome }} </td>
                    <td>{{ $a->coleta->cidade }}</td>
                    <td>{{ $a->pessoa->nome }} </td>
                    <td>{{ $a->pessoa->tipo }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection