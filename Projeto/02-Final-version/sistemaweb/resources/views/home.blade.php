@extends('principal')

@section('conteudo')
<div class="card-header">
<div class="row justify-content-center">
        <div class="card-title"><h1>Cadastros</h1></div>
    </div>
    <div class="row justify-content-center">
            <a class="nav-link" href="{{route('eventos.index')}}">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body text-center">
                        <h3>{{count($eventos)}}</h3>
                    </div>
                    <div class="card-header"><b>Eventos</b></div>
                </div>
            </a>
            <a class="nav-link" href="{{route('parceiros.index')}}">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body text-center">
                        <h3>{{count($parceiros)}}</h3>
                    </div>
                    <div class="card-header"><b>Parceiros</b></div>
                </div>
            </a>
            <a class="nav-link" href="{{route('produtos.index')}}">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body text-center">
                        <h3>{{count($produtos)}}</h3>
                    </div>
                    <div class="card-header"><b>Produtos</b></div>
                </div>
            </a>
            <a class="nav-link" href="{{route('treinos.index')}}">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body text-center">
                        <h3>{{count($treinos)}}</h3>
                    </div>
                    <div class="card-header"><b>Treinos</b></div>
                </div>
            </a>
    </div>



    <div class="row justify-content-center">
    <div class="card text-white bg-dark mb-3">
            <div class="card-header text-center">
                <h3>Emitir aviso</h3>
            </div>
            <div class="card-body">    
                <form action="{{ route('avisos.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                </div>

                <div class="form-group">
                    <label for="texto">Mensagem</label>
                    <input type="text" class="form-control" name="texto" id="texto">
                </div>

                <div class="form-group">
                    <label for="imagem">Imagem</label>
                    <input type="text" class="form-control" name="imagem" id="imagem">
                </div>

                <div class="text-right">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                    <input type="reset" value="Limpar" class="btn btn-danger">
                </div>

                </form>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header text-center">
                <h3>Entidade</h3>
            </div>
            <div class="card-body">
                @foreach($entidades as $e)    
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2" class="text-center">{{$e->nome}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Descrição</b></td>
                            <td>{{$e->descricao}}</td>
                        </tr>
                        <tr>
                            <td><b>CNPJ</b></td>
                            <td>{{$e->cpnj}}</td>
                        </tr>
                        <tr>
                            <td><b>Endereço</b></td>
                            <td>{{$e->endereco}}</td>
                        </tr>
                        <tr>
                            <td><b>Contato</b></td>
                            <td>{{$e->contato->nome}}</td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
                <div class="text-right">
                    <a href="{{ route('entidades.edit', 1) }}" class= "btn btn-primary">Editar</a>
                </div>

            </div>


        </div>
        
    </div>    
    
    
    
    
</div>
@endsection
