<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="https://svgur.com/i/Vt_.svg">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- https://fonts.google.com/specimen/Secular+One?sidebar.open=true&selection.family=Secular+One //-->

    <style type="text/css">
        .logo {
            font-family: 'Secular One', sans-serif;
        }
    </style>

    <title>Agendamento</title>
</head>
<body>

    <div class="container-fluid">
        <!-- https://getbootstrap.com/docs/4.5/components/navbar/ //-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">

                <!-- https://getbootstrap.com/docs/4.5/components/navs/ //-->          
            <div class="collapse navbar-collapse">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link btn btn-dark" href="{{ route('home') }}">Home</a></li>

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link btn btn-dark" href="{{ route('pessoas.index') }}">Pessoas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-dark" href="{{ route('agendamentos.index') }}">Agendamento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-dark" href="{{ route('coletas.index') }}">Coleta</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link btn btn-dark dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="nav-link btn btn-light" href="{{ route('register') }}">Cadastrar usuário</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
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
            </div>
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