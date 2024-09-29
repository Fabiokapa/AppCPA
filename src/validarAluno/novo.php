<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_POST)){
          if($_POST['novo'] === 'Registrar'){

            if($_SERVER["REQUEST_METHOD"] === "POST"){

                $nome = $_POST['nome-aluno'];
                $sobrenome = $_POST['sobrenome'];
                $genero = $_POST['genero'];
                $escola = $_POST['escola'];
                $numbi = $_POST['num_bi'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $bairro = $_POST['bairro'];
                $turno = $_POST['turno'];
                $desc = $_POST['descricao'];
                $idCurso = $_POST['idCurso'];
                $idAdmin = $_POST['idAdmin'];

                /* Verifica existencia de numero igual */
                $sqlNumero = (" SELECT *FROM aluno WHERE aluno.numero = '$telefone' ");
                $resultNumero = mysqli_query($conexao, $sqlNumero);

                if(mysqli_num_rows($resultNumero) != 0){
                    exit(" este numero já existe");
                } else {
                                    
                    $sql = (" INSERT INTO aluno (nome, sobrenome, sexo, escola, bi, numero, email, bairro, descricao, periodo, id_curso, id_admin) VALUES ('$nome', '$sobrenome', '$genero', '$escola','$numbi', '$telefone', '$email', '$bairro', '$desc', '$turno', '$idCurso', '$idAdmin') ");

                    if($sql == true){

                        $result = $conexao->query($sql);

                        // utltimo id 
                        $sqlID = mysqli_query($conexao, "SELECT MAX(id_aluno) AS id_aluno FROM aluno");
                        $ultima_linha = mysqli_fetch_assoc($sqlID);
                        $ultimo_idAluno = $ultima_linha['id_aluno'];

                        $sqlPagamento = (" INSERT INTO pagamento (Nome_aluno, valor_kz, dataPago, Janeiro, Fevereiro, Marco, Abril, Maio, Junho, Julho, Agosto, Setembro, Outubro, Novembro, Dezembro, id_admin, id_aluno) 
                        VALUES ('$nome','','','','','','','','','','','','','','','$idAdmin','$ultimo_idAluno')");

                        if($sqlPagamento == true){
                            $result = $conexao->query($sqlPagamento);
                        }

                        header("Location:http://localhost/centro/template/CA.php");

                    } 
                
                }
                
                } 
          }
    } 

?>