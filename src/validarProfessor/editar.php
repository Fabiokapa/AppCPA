<?php
    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_POST)){

        if($_POST['admin'] === 'Actualizar'){
            
            $id = $_POST['idproff'];
            $nome = $_POST['nome'];
            $sobre = $_POST['sobre'];
            $genero = $_POST['genero'];
            $numbi = $_POST['num_bi'];
            $telefone = $_POST['telefone'];
            $bairro = $_POST['bairro'];
            $email = $_POST['email'];
            $espec = $_POST['especialidade'];


            $sql = (" UPDATE professor SET nome='$nome', sobrenome='$sobre', genero='$genero', bi='$numbi', telefone='$telefone',bairro='$bairro',  email='$email', especialidade='$espec',
            id_admin='1'   WHERE professor.id_proff = '$id' ");
            
    
            if($sql){
                $result = $conexao->query($sql);
                header("Location:http://localhost/centro/template/C-edit-professor.php?id_proff=$id");
            }

        }
    
    }
?>