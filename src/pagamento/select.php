<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_aluno'])){

        $id = $_GET['id_aluno'];
        
        $sqlPagamento = (" SELECT *FROM pagamento WHERE id_aluno= '$id' ");
        $resultPaga = mysqli_query($conexao, $sqlPagamento);

        while($dPaga = mysqli_fetch_assoc($resultPaga)){
            $id = $dPaga['id_aluno'];
            $nome = $dPaga['Nome_aluno'];
            $jan =  $dPaga['Janeiro'];
            $fer =   $dPaga['Fevereiro'];
            $mar = $dPaga['Marco'];
            $Ab =    $dPaga['Abril'];
            $Ma =   $dPaga['Maio'];
            $Ju  =    $dPaga['Junho'];
            $jul  =    $dPaga['Julho'];
            $Ag =    $dPaga['Agosto'];
            $Set =   $dPaga['Setembro'];
            $out =  $dPaga['Outubro'];
            $nov =  $dPaga['Novembro'];
            $dez =  $dPaga['Dezembro'];
        }
    }


?>