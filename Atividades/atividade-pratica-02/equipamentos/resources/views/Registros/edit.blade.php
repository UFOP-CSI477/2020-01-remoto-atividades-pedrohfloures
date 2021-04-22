@extends('principal')

@section('conteudo')

    <form action="{{ route('registros.update', $registro->id) }}" method="post">

        @csrf
        @method('put')

        <div class="form-group">
            <label for="datalimite">Data</label>
            <input type="text" class="form-control" name="datalimite" id="datalimite" value="{{ $registro->datalimite }}">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $registro->descricao }}">
        </div>

        <div class="form-group">
            <label for="equipamento_id">Equipamento</label>

            <select name="equipamento_id" id="equipamento_id" class="form-control">

            @foreach($equipamentos as $e)
                <option value="{{$e->id}}"

                @if($e->equipamento_id == $e->id)
                    selected
                @endif

                >{{$e->nome}}</option>
            @endforeach

            </select>

        </div>

        <div class="form-group">
            <label for="tipo">Tipo</label>

            <select name="tipo" id="tipo" class="form-control">


                <option value="1"
                @if($registro->tipo == 1)
                    selected
                @endif
                >1 - Preventiva</option>
                
                <option value="2"
                @if($registro->tipo == 2)
                    selected
                @endif
                >2 - Corretiva</option>

                <option value="3"
                @if($registro->tipo == 3)
                    selected
                @endif
                >3 - Urgente</option>

            </select>

        </div>

        <div class="form-group">
            <label for="user_id">Usuário</label>

            <select name="user_id" id="user_id" class="form-control">

            @foreach($users as $u)
                <option value="{{$u->id}}"

                @if($registro->user_id == $u->id)
                    selected
                @endif

                >{{$u->name}}</option>
            @endforeach

            </select>

        </div>        

        <div class="text-right">
            <input type="submit" value="Atualizar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>

@endsection('conteudo')