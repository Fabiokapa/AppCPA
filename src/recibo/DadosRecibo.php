<?php
    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_GET['id_aluno'])){

        $id = $_GET['id_aluno'];

        // Dados do recibo

        $contabilista = "Adelina Jorge";
        $depositante = "Carlos Miguel";
        $director = "********";

        $sqlAluno = " SELECT *FROM aluno WHERE id_aluno = '$id' ";
        $result = mysqli_query($conexao, $sqlAluno);

        while($dados = mysqli_fetch_assoc($result)){
            $id = $dados['id_aluno'];
            $nome = $dados['nome'];
            $sobrenome = $dados['sobrenome'];
            $genero = $dados['sexo'];
            $escola = $dados['escola']; 
            $idCurso = $dados['id_curso'];
        }

        // Aux Seleção do curso

        $sqlCurso = " SELECT *FROM curso WHERE id_curso= '$idCurso' ";
        $resultCurso = mysqli_query($conexao, $sqlCurso);

        while($dCurso = mysqli_fetch_assoc($resultCurso)){
            $nomeCurso = $dCurso['nome'];
            $valorPropina = $dCurso['valor'];
        }

        // Ultima mensalidade paga / Numero de recibo 
        $sqlMensalidade = " SELECT MAX(id_alunPaga) AS idP FROM alunpapa ";
        $resultRecibo = mysqli_query($conexao, $sqlMensalidade);

        if($resultRecibo){
            $UltimoR = mysqli_fetch_assoc($resultRecibo);
            $numRecibo = $UltimoR['idP'];
        }

    } else {
        echo " não existe neum aluno";
    }
?>