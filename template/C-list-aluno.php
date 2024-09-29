<?php
    include_once __DIR__ . "/../src/validarAluno/select.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar alunos</title>
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
               <h3 id="titulo">Listar Dados Aluno <i class="fas fa-users"></i></h3>
               <div class="list-dados">
                
                <div class="dados">
                    <p><b>Nome: </b> <?php echo $nome?></p>
                    <p><b>Sobre-Nome: </b><?php echo $sobre?></p>
                    <p><b>Genero: </b> <?php echo $genero?></p>
                    <p><b>Bi: </b> <?php echo $bi?></p>
                    <p><b>Escola: </b> <?php echo $escola?></p>
                    <p><b>Telefone: </b> <?php echo $numero?></p>
                    <p><b>Email: </b> <?php echo $email?></p>
                    <p><b>Bairro: </b> <?php echo $bairro?></p>
                    <p><b>Descrição: </b> <?php echo $descricao?></p>
                    <p><b>Periodo: </b> <?php echo $periodo?></p>
                </div>

                </div>
           </section>

           <div class="texto">
                <?php
                        if(isset($_GET['id_aluno'])){
                        
                            $id = $_GET['id_aluno'];
                    
                            $selectAluno = mysqli_query($conexao, "SELECT aluno.nome AS NomeAluno, aluno.sobrenome AS SobreAluno, curso.nome AS NomeCurso, professor.nome AS NomeProff, professor.sobrenome AS ProffSobrenome FROM aluno, curso, professor
                            WHERE curso.id_curso = aluno.id_curso AND professor.id_proff = curso.id_proff AND aluno.id_aluno = $id");

                            $result = mysqli_fetch_assoc($selectAluno);
                            $nome = $result['NomeAluno'];
                            $sobreAluno = $result['SobreAluno'];
                            $curso = $result['NomeCurso'];
                            $proff = $result['NomeProff'];
                            $sobreProff = $result['ProffSobrenome'];

                            echo " <p> 
                               <b> $nome $sobreAluno, </b> do curso de <b> $curso </b>  com o/a professor/a <b> $proff $sobreProff</b>.
                            </p>";

                        }
                ?>
           </div>

        </article>
   </main>

</body>
</html>