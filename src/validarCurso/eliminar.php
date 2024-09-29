<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_curso'])){
        
        $id = $_GET['id_curso'];

        $sql = (" DELETE FROM curso WHERE id_curso = '$id' ");

        if($sql){
            $result = $conexao->query($sql);
            header("Location:http://localhost/centro/template/CA.php");
        }

    }
?>