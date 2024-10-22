<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'u774820395_securytechdb';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
         echo "Conexão efetuada com sucesso";
     }

?>