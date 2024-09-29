<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_proff'])){
        
        $id = $_GET['id_proff'];

        $sql = (" DELETE FROM professor WHERE id_proff = '$id' ");

        if($sql){
            $result = $conexao->query($sql);
            header("Location:http://localhost/centro/template/CA.php");
        }

    }
?>