<?php
    
    include_once __DIR__ . "/../basededados/conexao.php";
    session_start();

    if(isset($_POST)){

        if($_POST['admin'] == 'Entrar'){
            
            $admin = trim($_POST['utilizador']); 
            $senha = trim($_POST['senha']);
            
            $sql = (" SELECT *FROM admin WHERE nome = '$admin' AND senha = '$senha' ");
            $resultUtilizador = mysqli_query($conexao, $sql); 

            if(mysqli_num_rows($resultUtilizador) != 0){

                $_SESSION['nome'] = $admin;
                $_SESSION['senha'] = $senha;

                header("Location:http://localhost/centro/template/CA.php");
            } else {

                unset($_SESSION['nome']);
                unset($_SESSION['senha']);
                header("Location:http://localhost/centro/app/entrar.php");
                
            }

        }
    }

?>