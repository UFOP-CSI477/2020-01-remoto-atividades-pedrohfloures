<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="https://svgur.com/i/Vt_.svg">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- https://fonts.google.com/specimen/Secular+One?sidebar.open=true&selection.family=Secular+One //-->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <script src={{asset("js/mascara.min.js")}}></script>
    <style type="text/css">
        .logo {
            font-family: 'Secular One', sans-serif;
        }
    </style>

    <title>Loucomotiva</title>
</head>
<body>


    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand logo" href="{{route('home')}}">
                <img src="https://i.ibb.co/DwVYMMJ/Logotipo.png" class="img-fluid" alt="Logo" style="width:75px">
            </a>
            <button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="{{route('avisos.index')}}">Avisos</a>
                        </li> -->
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('contatos.index')}}">Contatos</a>
                        </li>
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="{{route('entidades.index')}}">Entidades</a>
                        </li> -->
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('eventos.index')}}">Eventos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('parceiros.index')}}">Parceiros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('treinos.index')}}">Treinos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link btn btn-dark dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('register') }}">Cadastrar usuário</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
    
            </ul>
        </nav>
    

        @if(session('mensagem'))
            <div class="alert alert-success">
                {{session('mensagem')}}
            </div>
        @endif
        @if(session('erro'))
            <div class="alert alert-danger">
                {{session('erro')}}
            </div>
        @endif
        
        @yield('conteudo')
    </div>

</body>
</html>