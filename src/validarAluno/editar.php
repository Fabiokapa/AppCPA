<?php
    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_POST)){

        if($_POST['admin'] === 'Actualizar'){

            $id = $_POST['id_aluno'];
            $nome = $_POST['nome'];
            $sobre = $_POST['sobre'];
            $genero = $_POST['genero'];
            $escola = $_POST['escola'];
            $numbi = $_POST['num_bi'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $bairro = $_POST['bairro'];
            $icurso = $_POST['idCurso'];
            $turno = $_POST['turno'];
            $desc = $_POST['desc'];

            $sql = (" UPDATE aluno SET nome='$nome', sobrenome='$sobre', sexo='$genero', escola='$escola', bi='$numbi', numero='$telefone', email='$email', bairro='$bairro', descricao='$desc', periodo='$turno', id_curso='$icurso',
            id_admin='1'   WHERE aluno.id_aluno = '$id' ");

            //var_dump($sql); exit(" teste");
    
            if($sql){
                $result = $conexao->query($sql);
                header("Location:http://localhost/centro/template/C-edit-aluno.php?id_aluno=$id");
            }

        }
    
    }
?>