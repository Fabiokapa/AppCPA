<?php
    include_once __DIR__ . "/../src/validarAluno/select.php";
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
                <h3 id="titulo">Actualizar Dados <i class="fas fa-users"></i></h3>
                <div class="form-dados">
                    <form action="../src/validarAluno/editar.php" method="post">
                        <div class="dados">

                            <input type="hidden" name="id_aluno" value="<?php echo $idA?>">

                            <div>
                                <i class="fas fa-user"></i>
                                <input type="text" name="nome" value="<?php echo $nome?>">
                            </div>

                            <div>
                                <i class="fas fa-user-plus"></i>
                                <input type="text" name="sobre" value="<?php echo $sobre ?>">
                            </div>

                           <div>
                                <i class="fas fa-venus-double"></i>
                                <select name="genero" id="">
                                    <option selected><?php echo $genero?></option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                           </div>

                            <div>
                                <i class="fas fa-sort-numeric-up"></i>
                                <input type="text" name="escola" value="<?php echo $escola ?>">
                            </div>

                            <div>
                                <i class="fas fa-sort-numeric-up"></i>
                                <input type="text" name="num_bi" value="<?php echo $bi  ?>">
                            </div>

                            <div>
                                <i class="fas fa-phone"></i>
                                <input type="text" name="telefone" value="<?php echo  $numero ?>">
                            </div>

                            <div>
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" value="<?php echo  $email ?>">
                            </div>

                            <div>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="bairro" value="<?php echo  $bairro ?>">
                            </div>

                            <div>
                                <i class="fas fa-book"></i>
                                <select name="idCurso" id="">
                                    <option selected><?php echo $idCurso?></option>
                                    <?php
                                        $sqlD = mysqli_query($conexao, " SELECT *FROM curso");
                                        while($Dcurso = mysqli_fetch_assoc($sqlD)){
                                            echo "<option value='$Dcurso[id_curso]'>";
                                                    echo $Dcurso['nome'];
                                                "<option>";
                                        }
                                    ?>
                                </select>                                                        
                            </div>

                            <div>
                                <i class=""></i>
                                <select name="turno" id="">
                                    <option selected><?php echo $periodo?></option>
                                    <option value="Tarde">Tarde</option>
                                    <option value="Manhã">Manhã</option>
                                </select>
                            </div>
                            
                            <textarea name="desc" id="" cols="10" rows="4" value="<?php echo $descricao?>"><?php echo $descricao?></textarea>
          
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