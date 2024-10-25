<?php

    $dbHost = 'localhost';
    $dbUsername = 'u774820395_securytech';
    $dbPassword = '3108006A.g';
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