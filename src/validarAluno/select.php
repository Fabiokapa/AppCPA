<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_aluno'])){

        $id = $_GET['id_aluno'];

      // SELECT ALUNO
      $sqlAluno = mysqli_query($conexao, " SELECT *FROM aluno WHERE id_aluno = '$id' ");

      while($dado = mysqli_fetch_assoc($sqlAluno)){
          $idA = $dado['id_aluno'];
          $nome = $dado['nome'];
          $sobre = $dado['sobrenome'];
          $genero = $dado['sexo'];
          $escola = $dado['escola'];
          $bi = $dado['bi'];
          $numero = $dado['numero'];
          $email = $dado['email'];
          $bairro = $dado['bairro'];
          $descricao = $dado['descricao'];
          $periodo = $dado['periodo'];
          $idCurso = $dado['id_curso'];
      }

    }


?>