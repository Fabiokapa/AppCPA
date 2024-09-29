<?php
    include_once __DIR__ . "/../src/recibo/DadosRecibo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/recibo.css">
    <link rel="stylesheet" href="../CSS/global.css">
    <title>Recibo de pagamento</title>
</head>
<body>

        <div class="sair">
            <a href="../template/CA.php">Sair</a>
        </div>

        <div class="container-recibo">
                <header>
                    <figure>
                        <img src="../img/logo.png" alt="">
                    </figure>

                    <div class="d-aluno">
                        <h4>CENTRO PREPARATORIO DE BENGUELA ARICLENADO
                             <br> 
                             RECIBO DE PAGAMENTO DE PROPINA 
                        </h4>
                    </div>
                </header>
        
                <main>
                    <article>
                        <section>
                                <div class="container">
                                    <div class="container-d-alunos">
                                        <h4>Recibo nº <?php echo $numRecibo?></h4>

                                        <span>
                                            <p>Data: <b><?php echo $data?></b></p>
                                            <b>Pagamento referente ao mês de: <b></b></b>
                                        </span>

                                        <div>
                                            <p>Nome: <b><?php echo $nome?></b> <b><?php echo $sobrenome?></b></p>
                                            <p>Curso: <b><?php echo $nomeCurso?></b></p>
                                            <p>Valor da Propina: <b><?php echo $valorPropina ?></b></p>
                                            <p>Valor do material: </p>
                                            <p>Total geral pago: </p>
                                        </div>

                                        <span class="rodape">
                                            <b>O Contabilista: <small><?php echo $depositante?></small> </b>
                                            <b>O Depositante: <small><?php echo $depositante?></small> </b>
                                        </span>

                                    </div>
                                </div>
                        </section>
                    </article>
                </main>
                
                <footer>
                    <div class="ddl-alunos rodape">
                        <b>O Director financeiro <small><?php echo $director?></small></b>
                    </div>
                </footer>
        </div>

</body>
</html>