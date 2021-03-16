<?php

    //echo "POST";
    //var_dump($_POST);
    
    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    // CONTROLLER

    if($user == "Pedro" && $password == "123456")
    {
        echo "<h1>Olá, $user !</h1>";

    } else
    {
        echo "<h1>Usuário e/ou senha inválidos!</h1>";
    }

    echo "<a href=\"index.php\">Voltar</a>";