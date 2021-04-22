@extends('principal')

@section('conteudo')

<div class="card-header">
        <div class="card-title">
            <h2 class="card-title text-center">Cadastrar Produto</h2>
        </div>
</div>

<div class="card-header">
    <form action="{{ route('produtos.store')}}" method="post">

        @csrf
        <div class="row align-items-center">

            <div class="col">
                <label for="nome"><b>Nome</b></label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            
            <div class="col">
                <label for="descricao"><b>Descrição</b></label>
                <input type="text" class="form-control" name="descricao" id="descricao" >
            </div>
        </div>
        <br>
        <div class="row align-items-center">
            
            <div class="col">
            <label for="valorSocio"><b>Valor Sócio</b></label>   
                <input type="text" class="form-control" name="valorSocio" id="valorSocio">
            </div>

            <div class="col">
                <label for="valor"><b>Valor</b></label>  
                <input type="text" class="form-control" name="valor" id="valor">
            </div>
            <div class="col">
                <label for="quantidade"><b>Quantidade</b></label>  
                <input type="text" class="form-control" name="quantidade" id="quantidade">
            </div>

        </div>
        <br>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <input type="reset" value="Limpar" class="btn btn-danger">
            <a href="{{route('produtos.index')}}" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>
@endsection