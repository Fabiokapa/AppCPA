
<?php
    include_once __DIR__ . "/meta.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>

    <link rel="stylesheet" href="../CSS/geral.css">
    <main>

        <article>
            <section>
                <div class="conteiner">
                    <div class="topo">
                        <p><a href="./CA.php">voltar</a></p>
                        <h2>ESTATISTICA GERAL DO CENTRO</h2>
                    </div>
                </div>
            </section>
        </article>

        <article>
            <section>
                    <div class="conteiner-cards">
                        <div>
                            <h3></h3>
                        </div>

                        <div id="card-item">
                            <i class="fas fa-user-alt" id="alunos"></i>
                            <div>
                                <h3><?php echo $TotalAlunos ?></h3>
                                <p>ALUNOS REGISTRADOS</p>
                            </div>
                            <p><i class="fas fa-dot-circle"  id="m"></i><b><?php echo $TotalMasculino ?></b> Masculino</p>
                            <p><i class="fas fa-dot-circle"  id="f"></i><b><?php echo $TotalFemenino ?></b> Femeninos</p>
                        </div>

                        
                        <div id="card-item">
                            <i class="fas fa-user-graduate" id="alunos"></i>
                            <div>
                                <h3><?php echo $TotalProff?></h3>
                                <p>PROFESSORES REGISTRADOS</p>
                            </div>
                            <p><i class="fas fa-dot-circle" id="m"></i><b><?php echo $TotalM ?></b> Masculino</p>
                            <p><i class="fas fa-dot-circle" id="f"></i><b><?php echo $TotalF ?></b> Femeninos</p>
                        </div>

                        <div id="card-item">
                            <i class=" fas fa-book" id="alunos"></i>
                            <div>
                                <h3><?php echo $TotalCurso?></h3>
                                <p>CURSOS REGISTRADOS</p>
                            </div>
                        </div>

                    </div>
            </section>
        </article>
       
    </main>

<?php
    include_once __DIR__ . "/meta2.php";
?>
