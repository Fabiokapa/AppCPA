<?php
    include_once __DIR__ . "/../src/pagamento/select.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados pagamento</title>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/pagamento.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <a href="../template/CA.php"><h2>CA</h2></a>
        </div>
        <a href="CA-propina.php?id_aluno=<?php echo $id?>" id="btn-pagar">Efetuar Pagamento</a>
    </header>

    <main>
        <article>
             <section>

                  <div id="descricao">
                        <p> <i class="fas fa-address-book"></i> Relatório de pagamentos mensais referente ao aluno <b><?php echo $nome ?></b> </p>
                  </div>

                  <div class="container-pagamento">
                        <table>

                            <thead>
                                <th>Janeiro</th> <th>Fevereiro</th> <th>Março</th>  <th>Abril</th> 
                                <th>Maio</th> <th>Junho</th> <th>Julho</th> <th>Agosto</th> <th>Setembro</th> 
                                <th>Outubro</th> <th>Novembro</th> <th>Dezembro</th> 
                            </thead>

                            <tbody>
                               <tr>
                                 <td><?php echo $jan?></td>
                                 <td><?php echo $fer?></td>
                                 <td><?php echo $mar?></td>
                                 <td><?php echo $Ab?></td>
                                 <td><?php echo $Ma?></td>
                                 <td><?php echo $Ju?></td>
                                 <td><?php echo $jul?></td>
                                 <td><?php echo $Ag?></td>
                                 <td><?php echo $Set?></td>
                                 <td><?php echo $out?></td>
                                 <td><?php echo $nov?></td>
                                 <td><?php echo $dez?></td>
                               </tr>
                            </tbody>

                        </table>
                  </div>

             </section>
        </article>
   </main>

</body>
</html>