@extends('principal')

@section('conteudo')
<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Editar Perfil</h2>
            <h5 class="card-title text-center">{{$entidade->nome}}</h5>
        </div>
</div>

<div class="card-header">
<form action="{{ route('entidades.update', $entidade->id)}}" method="post">

    @csrf
    @method('PUT')
    <div class="row align-items-center">
        <div class="col">
            <label for="nome"><b>Nome</b></label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ $entidade->nome }}">
        </div>

        <div class="col">
            <label for="cpnj"><b>CNPJ</b></label>
            <input class="form-control" type="text" name="cpnj" id="cpnj" placeholder="##.###.###/####-##" onkeyup="mascara('##.###.###/####-##',this,event,true)" maxlength="18" value="{{ $entidade->cpnj }}">
        </div>
    </div>
    <br>
    <div class="row align-items-center">
        <div class="col">
            <label for="endereco"><b>Endereço</b></label>
            <input type="text" class="form-control" name="endereco" id="endereco" value="{{ $entidade->endereco }}">
        </div>
        <div class="col">
                <label for="contato_id"><b>Contato</b></label>

                <select name="contato_id" id="contato_id" class="form-control">

                @foreach($contatos as $c)
                    <option value="{{$c->id}}"

                    @if($entidade->contato_id == $c->id)
                        selected
                    @endif

                    >{{$c->nome}}</option>
                @endforeach

                </select>

        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="descricao"><b>Descrição</b></label>
        <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $entidade->descricao }}">
    </div>



    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>

</form>

</div>
@endsection