<?php

    include_once __DIR__ . "/../basededados/conexao.php";

      // DATA do sistema 
      date_default_timezone_set('Africa/Luanda');
      $data = date("d/m/Y");
      $hora = date('H:i:s');


     // SELECT ADMIN
     $sql = mysqli_query($conexao, " SELECT *FROM admin");
     while($dado = mysqli_fetch_assoc($sql)){
        $idAdmintrador = $dado['id_admin'];
     }

      /******* Aluno ********/
      $sqlAluno = mysqli_query($conexao, " SELECT *FROM aluno");
     $TotalAlunos = mysqli_num_rows($sqlAluno);

     # Genero masculino
     $sqlMasculino = mysqli_query($conexao, " SELECT *FROM aluno WHERE sexo= 'masculino' ");
     $TotalMasculino = mysqli_num_rows($sqlMasculino);

      # Genero femenio
      $sqlFemenino = mysqli_query($conexao, " SELECT *FROM aluno WHERE sexo= 'femenino' ");
      $TotalFemenino = mysqli_num_rows($sqlFemenino);

     /******* Professor ********/

     // SELECT PROFESSOR
     $sqlProff = mysqli_query($conexao, " SELECT *FROM professor");
     $TotalProff = mysqli_num_rows($sqlProff);

      # Genero masculino
      $sqlProff_m = mysqli_query($conexao, " SELECT *FROM professor WHERE genero= 'masculino' ");
      $TotalM = mysqli_num_rows($sqlProff_m);

      # Genero femenio
      $sqlProff_f = mysqli_query($conexao, " SELECT *FROM professor WHERE genero= 'femenino' ");
      $TotalF = mysqli_num_rows($sqlProff_f);

     /******* Curso ********/

     //SELECT CURSO
     $sqlCursos = mysqli_query($conexao, "SELECT *FROM curso");
     $TotalCurso = mysqli_num_rows($sqlCursos);
     
?>