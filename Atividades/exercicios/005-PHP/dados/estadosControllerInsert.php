<?php

    require 'connection.php';

    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];

    if(empty($nome) || empty($sigla))
    {
        echo '<div><a href="estadosViewInsert">Voltar</a></div>';
        die('Informe os dados corretamente!');
    }
    $stmt = $connection->prepare("INSERT INTO estados (nome, sigla) VALUES (:nome, :sigla)");

    var_dump($nome);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sigla', $sigla);

    $stmt->execute();
    
    header('Location: index.php');

    exit();



