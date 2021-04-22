 <?php

   require 'connection.php';

   $estados = $connection->query("SELECT * FROM estados");
    
   include 'estadosView.php';
    