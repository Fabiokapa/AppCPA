<?php
    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_POST)){

            if($_POST['admin'] === 'Actualizar'){
                
                $id = $_POST['idCurso'];
                $nome = $_POST['nome'];
                $disc = $_POST['disciplina'];
                $duracao = $_POST['duracao'];
                $valor = $_POST['valor'];
                $proff = $_POST['proff'];

                $sql = (" UPDATE curso SET nome='$nome', disciplinas='$disc', duracao='$duracao', valor='$valor', id_proff='$proff'  WHERE curso.id_curso = '$id' ");
    
        
                if($sql){
                    $result = $conexao->query($sql);
                    header("Location:http://localhost/centro/template/C-edit-curso.php?id_curso=$id");
                }
            }
    }
?>