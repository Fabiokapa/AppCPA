<?php
    include_once __DIR__ . "/../src/basededados/conexao.php";
    $nome = $_POST['valor'];
    $sql = "SELECT * FROM curso WHERE nome LIKE '%$nome%' ";
    $result = $conexao->query($sql); 
?>

    <div class="resultado">
    <table>
        <thead>
              <th>#ID</th> <th>Nome</th>  <th>id_proff</th>
        </thead>

        <tbody>
             <?php

               if($result->num_rows > 0){
                    while($dadoCurso = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?=$dadoCurso['id_curso']?></td>
                            <td><?=$dadoCurso['nome']?></td>
                            <td><?=$dadoCurso['id_curso']?></td>
                            <td id="opc-pesquisa">
                                <a href="../template/C-edit-curso.php?id_curso=<?=$dadoCurso['id_curso']?>"> <i class="fas fa-user-edit"></i> </a>
                                <a href="../template/C-list-curso.php?id_curso=<?=$dadoCurso['id_curso']?>"> <i class="fas fa-list-ul"></i> </a>
                                <a href="../src/validarCurso/eliminar.php?id_curso=<?=$dadoCurso['id_curso']?>"> <i class="fas fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php }
               } else {

               }
             ?>
        </tbody>
        </table>
    </div>