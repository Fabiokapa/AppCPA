<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_proff'])){

        $id = $_GET['id_proff'];

        $sql = mysqli_query ($conexao, " SELECT *FROM professor WHERE id_proff = '$id'");
        while($dadosProff = mysqli_fetch_assoc($sql)){
            $idProff = $dadosProff['id_proff'];
            $nome = $dadosProff['nome'];
            $sobrenome = $dadosProff['sobrenome'];
            $genero = $dadosProff['genero'];
            $bi = $dadosProff['bi'];
            $telefone = $dadosProff['telefone'];
            $email = $dadosProff['email'];
            $bairro = $dadosProff['bairro'];
            $especi = $dadosProff['especialidade'];

        }

    }

?>