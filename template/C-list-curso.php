<?php
    include_once __DIR__ . "/../src/validarCurso/select.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar cursos</title>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/List-geral.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <a href="../template/CA.php"><h2>CA</h2></a>
        </div>
    </header>

    <main>
        <article>
           <!------ Editar --->
           <section>
               <h3 id="titulo">Listar Dados Curso <i class="fas fa-book"></i></h3>
               <div class="list-dados">
                
                <div class="dados">
                    <p><b>Nome: </b><?php echo $nome?></p>
                    <p><b>Disciplinas: </b> <?php echo $dis?></p>
                    <p><b>Duração: </b> <?php echo $duracao?></p>
                    <p><b>Valor: </b> <?php echo $valor?></p>
                </div>

                </div>
           </section>
        </article>
   </main>

</body>
</html>