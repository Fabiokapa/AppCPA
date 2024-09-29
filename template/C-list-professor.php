<?php
    include_once __DIR__ . "/../src/validarProfessor/select.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Professores</title>
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
               <h3 id="titulo">Listar Dados Professor <i class="fas fa-users"></i></h3>
               <div class="list-dados">
                
                <div class="dados">
                    <p><b>Nome: </b> <?php echo $nome?></p>
                    <p><b>Sobre-Nome: </b> <?php echo $sobrenome?></p>
                    <p><b>Genero: </b> <?php echo $genero?></p>
                    <p><b>Telefone: </b> <?php echo $bi?></p>
                    <p><b>Telefone: </b> <?php echo $telefone?></p>
                    <p><b>Bairro: </b> <?php echo $bairro?></p>
                    <p><b>Email: </b> <?php echo $email?></p>
                    <p><b>Especialidade: </b> <?php echo $especi?></p>
                </div>

                </div>
           </section>
        </article>
   </main>

</body>
</html>