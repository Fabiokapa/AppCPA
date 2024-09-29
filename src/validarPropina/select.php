<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_aluno'])){

        $id = $_GET['id_aluno'];

        $sql = mysqli_query($conexao, " SELECT *FROM pagamento WHERE id_aluno='$id' ");
        while($dados = mysqli_fetch_assoc($sql)){
            $idAluno = $dados['id_aluno'];
            $nomeAluno = $dados['Nome_aluno'];
            $J = $dados['Janeiro'];
            $F = $dados['Fevereiro'];
            $Mar = $dados['Marco'];
            $A = $dados['Abril'];
            $Mai = $dados['Maio'];
            $Ju = $dados['Junho'];
            $Jul = $dados['Julho'];
            $Ag = $dados['Agosto'];
            $S = $dados['Setembro'];
            $O = $dados['Outubro'];
            $N = $dados['Novembro'];
            $D = $dados['Dezembro'];
        }

    }
?>