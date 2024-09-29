<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_POST)){
          if($_POST['novo'] === 'Registrar'){

            if($_SERVER["REQUEST_METHOD"] === "POST"){

                $nome = $_POST['nome-proff'];
                $sobrenome = $_POST['sobrenome'];
                $gerero = $_POST['genero'];
                $numbi = $_POST['num_bi'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $bairro = $_POST['bairro'];
                $espec = $_POST['especialidade'];
                $id = $_POST['idAdmin'];

                $sql = (" INSERT INTO professor (nome, sobrenome, genero, bi, telefone, email, bairro, especialidade, id_admin) VALUES ('$nome', '$sobrenome', '$gerero', '$numbi', '$telefone', '$email', '$bairro','$espec', '$id') ");

                if($sql){

                    $result = $conexao->query($sql);
                    header("Location:/../../centro/template/CA.php");
                }
                
                } 

          } 
          
    } 
?>