<?php
    include_once __DIR__ . "/../src/validarCurso/select.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados Aluno</title>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/Edt-geral.css">
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
                <h3 id="titulo">Actualizar Dados Curso <i class="fas fa-book"></i></h3>
                <div class="form-dados">
                    <form action="../src/validarCurso/editar.php" method="post">
                        <div class="dados">

                            <input type="hidden" name="idCurso" value="<?php echo $idC?>">

                            <div>
                                <label for="">Curso:</label>
                                <input type="text" name="nome" value="<?php echo $nome?>">
                            </div>

                            <div>
                                <label for="">Disciplinas:</label>
                                <input type="text" name="disciplina" value="<?php echo $dis?>">
                            </div>

                            <div>
                                <label for="">Duração:</label>
                                <input type="text" name="duracao" value="<?php echo $duracao?>">
                            </div>

                            <div>
                                <label for="">Valor:</label>
                                <input type="number" name="valor" value="<?php echo $valor?>">
                            </div>

                            <div>
                                <label for="">Professor:</label>
                                <select name="proff" id="">
                                    <option selected><?php echo $idProff ?></option>
                                    <?php
                                        $sqlP = mysqli_query($conexao, " SELECT *FROM professor");
                                        while($Dprofessor = mysqli_fetch_assoc($sqlP)){
                                            echo "<option value='$Dprofessor[id_proff]'>";
                                                echo $Dprofessor['nome'] . ' ' . $Dprofessor['sobrenome'];
                                            "</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                        <br>

                        <center>
                             <input type="submit" name="admin" value="Actualizar">
                        </center>

                    </form>
                 </div>
            </section>
         </article>
    </main>

</body>
</html>