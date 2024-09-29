<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_curso'])){

        $id = $_GET['id_curso'];

        $sql = mysqli_query($conexao, "SELECT *FROM curso WHERE id_curso='$id' ");
        while($dadosCurso = mysqli_fetch_assoc($sql)){
            $idC = $dadosCurso['id_curso'];
            $nome = $dadosCurso['nome'];
            $dis = $dadosCurso['disciplinas'];
            $duracao = $dadosCurso['duracao'];
            $valor = $dadosCurso['valor'];
            $idProff = $dadosCurso['id_proff'];
        }
    }

?>