<?php
    include_once __DIR__ . "/../src/basededados/conexao.php";
    $nome = $_POST['valor'];
    $sql = "SELECT * FROM professor WHERE nome LIKE '%$nome%' ";
    $result = $conexao->query($sql); 
?>

    <div class="resultado">
    <table>
        <thead>
              <th>#ID</th> <th>Nome</th>  <th>Especialidade</th>
        </thead>

        <tbody>
             <?php

               if($result->num_rows > 0){
                    while($dadoProff = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?=$dadoProff['id_proff']?></td>
                            <td><?=$dadoProff['nome'] .' '. $dadoProff['sobrenome'] ?></td>
                            <td><?=$dadoProff['especialidade']?></td>
                            <td id="opc-pesquisa">
                                <a href="../template/C-edit-professor.php?id_proff=<?=$dadoProff['id_proff']?>"> <i class="fas fa-user-edit"></i> </a>
                                <a href="../template/C-list-professor.php?id_proff=<?=$dadoProff['id_proff']?>"> <i class="fas fa-list-ul"></i> </a>
                                <a href="../src/validarProfessor/eliminar.php?id_proff=<?=$dadoProff['id_proff']?>"> <i class="fas fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php }
               } else {

               }
             ?>
        </tbody>
        </table>
    </div>