<?php
    
    include_once __DIR__ . "/../basededados/conexao.php";
    
    session_start();

    if(!isset($_SESSION['nome']) == true || (!isset($_SESSION['senha']) == true)){
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header("Location: http://localhost/centro/app/entrar.php");
    }
?>