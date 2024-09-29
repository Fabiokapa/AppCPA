<?php
    include_once __DIR__ . "/../src/basededados/conexao.php";
    $nome = $_POST['valor'];
    $sql = "SELECT * FROM aluno WHERE nome LIKE '%$nome%' ";
    $result = $conexao->query($sql); 
?>

    <div class="resultado">
    <table>
        <thead>
              <th>#ID</th> <th>Nome</th>  <th>Escola</th> <th>Curso</th>
        </thead>

        <tbody>
             <?php

               if($result->num_rows > 0){
                    while($dado = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?=$dado['id_aluno']?></td>
                            <td><?=$dado['nome'] .' '. $dado['sobrenome'] ?></td>
                            <td><?=$dado['escola']?></td>
                            <td><?=$dado['id_curso']?></td>
                            <td id="opc-pesquisa">
                                <a href="../template/C-edit-aluno.php?id_aluno=<?=$dado['id_aluno']?>"> <i class="fas fa-user-edit"></i> </a>
                                <a href="../template/C-list-aluno.php?id_aluno=<?=$dado['id_aluno']?>"> <i class="fas fa-list-ul"></i> </a>
                                <a href="../src/validarAluno/eliminar.php?id_aluno=<?=$dado['id_aluno']?>"> <i class="fas fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php }
               } else {

               }
             ?>
        </tbody>
        </table>
    </div>