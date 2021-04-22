@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Editar Produto</h2>
            <h5 class="card-title text-center">{{$produto->nome}}</h5>
            <h6 class="card-title text-center">{{$produto->descricao}}</h6>
        </div>
</div>

<div class="card-header">
    <form action="{{ route('produtos.update', $produto->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="row align-items-center">
            <div class="col">
                <label for="nome"><b>Nome</b></label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}">
            </div>
            <div class="col">
                <label for="descricao"><b>Descrição</b></label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $produto->descricao }}">
            </div>
        </div>

        <br>

        <div class="row align-items-center">
            <div class="col">
                <label for="quantidade"><b>Quantidade</b></label>
                <input type="text" class="form-control" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}">
            </div>
            <div class="col">
                <label for="valorSocio"><b>Valor Sócio</b></label>
                <input type="text" class="form-control" name="valorSocio" id="valorSocio" value="{{ $produto->valorSocio }}">
            </div>
            <div class="col">
                <label for="valor"><b>Valor</b></label>
                <input type="text" class="form-control" name="valor" id="valor" value="{{ $produto->valor }}">
            </div>
        </div>
        <br>
</div>

        <div class="card-footer text-right">
            <input type="submit" value="Atualizar" class="btn btn-success">
                
            <input type="reset" value="Limpar" class="btn btn-warning">
            <a href="{{route('produtos.show', $produto->id)}}" class="btn btn-dark">Voltar</a>
    
        </div>            
    
</form>




@endsection