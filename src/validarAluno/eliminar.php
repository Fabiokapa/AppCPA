<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_aluno'])){
        
        $id = $_GET['id_aluno'];

        $sql = (" DELETE FROM aluno WHERE id_aluno = '$id' ");

        if($sql){
            $result = $conexao->query($sql);
            header("Location:http://localhost/centro/template/CA.php");
        }

    }
?>