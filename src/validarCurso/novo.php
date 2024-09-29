<?php

    include_once   __DIR__  . "/../basededados/conexao.php";

    if(isset($_POST)){
          if($_POST['novo'] === 'Registrar'){

            if($_SERVER["REQUEST_METHOD"] === "POST"){

                $nome = $_POST['nome-curso'];
                $disciplina = $_POST['disciplina'];
                $duracao = $_POST['duracao'];
                $valor = $_POST['valor'];
                $idProff = $_POST['professor'];
                $idAdmin = $_POST['administrador'];

                $sql = (" INSERT INTO curso (nome, disciplinas, duracao, valor, id_Proff, id_admin) VALUES ('$nome', '$disciplina', '$duracao', '$valor' ,'$idProff', '$idAdmin') ");

                if($sql){

                    $result = $conexao->query($sql);
                    header("Location:http://localhost/centro/template/CA.php");
                }
                
                } else {
                    echo "erro";
                }

          } else {
             echo "erro";
          }
    } else {
        echo "erro";
    }

?>