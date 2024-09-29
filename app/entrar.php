<?php
      include_once __DIR__  . "/../src/basededados/conexao.php";    
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CA</title>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/entrar.css">
</head>
<body>
    
     <div class="conteiner-formulario">
            <div class="sub-formulario">
                  <form action="../src/validarEntrar/entrar.php" method="post">
                        <h2>Entrar</h2>
                        <div id="campo">
                              <input type="text" name="utilizador" placeholder="Nome de utilizador">
                              <input type="password" name="senha" placeholder="Palavra passe">
                        </div>

                        <div id="enviar">
                        <input type="submit" name="admin" value="Entrar">
                        </div>
                  </form>
            </div>
     </div> 

</body>
</html>