 <?php

    $dbfile = "./db/database.sqlite";
    $dbuser = "";
    $dbpassword = "";
    $dbhost = "";

    $strConnection = "sqlite:" . $dbfile;

    $connection = new PDO($strConnection, $dbuser, $dbpassword);

    $estados = $connection->query("SELECT * FROM estados");
    
    include 'estadosView.php';
    