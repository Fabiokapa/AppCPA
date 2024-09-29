<?php

    include_once __DIR__ . "/../basededados/conexao.php";

    if(isset($_POST)){

        if($_POST['Pagamento'] == 'Enviar'){   
            
            $id = $_POST['ida'];

            // Seleção do id curso 
            $sqlCurso = (" SELECT aluno.id_curso FROM aluno WHERE id_aluno = '$id' ");
            $resultCurso = mysqli_query($conexao, $sqlCurso);

                if($resultCurso){

                    $IDcurso = mysqli_fetch_assoc($resultCurso);
                    $valorID = $IDcurso['id_curso'];

                    // seleção do valor do curso
                    $sqlVcurso = (" SELECT curso.valor FROM curso WHERE id_curso = $valorID");
                    $resultVcurso = mysqli_query($conexao, $sqlVcurso);

                    if($resultVcurso){
                        $Curso_V = mysqli_fetch_assoc($resultVcurso);
                        $valor_C = $Curso_V['valor'];
                    }

                }

                // ID valor curso e ID aluno 
                if(isset($valor_C) && isset($valorID)){

                        $valor  = $valor_C;
                        $formaPaga = $_POST['formaPaga'];
                        $jan = $_POST['Janeiro'];
                        $fer = $_POST['Fevereiro'];
                        $mar = $_POST['Marco'];
                        $Ab = $_POST['Abril'];
                        $Ma = $_POST['Maio'];
                        $Ju = $_POST['Junho'];
                        $jul = $_POST['Julho'];
                        $Ag = $_POST['Agosto'];
                        $Set = $_POST['Setembro'];
                        $out = $_POST['Outubro'];
                        $nov = $_POST['Novembro'];
                        $dez = $_POST['Dezembro'];

                        $sql = (" UPDATE pagamento SET valor_kz='$valor', formaPagamento='$formaPaga', Janeiro='$jan', Fevereiro='$fer', Marco='$mar', Abril='$Ab', Maio='$Ma', Junho='$Ju', Julho='$jul', Agosto='$Ag', Setembro='$Set', Outubro='$out', Novembro='$nov',Dezembro='$dez' WHERE pagamento.id_aluno = '$id' "); 
                     
                        if($sql){

                            $result = $conexao->query($sql);
           
                                        // Seleção do ultimo id do pagamento
                                    $SelectId = (" SELECT MAX(id_pagamento) AS idpaga FROM pagamento");
                                    $resultID = mysqli_query($conexao, $SelectId);
                                    $ultimoPagamento = mysqli_fetch_assoc($resultID);
                                    $ultima_idPaga = $ultimoPagamento['idpaga'];

                                    // Dados da tabela aluno pagamento
                                $sqlAlunoPaga = (" INSERT INTO alunpapa (id_pagamento, id_aluno) VALUES ('$ultima_idPaga', '$id') "); 
                                $resultAlunPaga = mysqli_query($conexao, $sqlAlunoPaga);

                                header("location:../../docs/recibo.php?id_aluno=$id");

                        }                    
                }

        }
    }
?>