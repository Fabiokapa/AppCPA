<?php

    $host = "localhost";
    $name = "root";
    $pass = "";
    $dbname = "centro";
    
    $conexao = new mysqli($host,$name,$pass,$dbname);

    if($conexao->error){
        die("Falha na conexão" .$conexao->error);
    }

    include_once __DIR__ . "/../repositorio/Selects.php";

?>