<?php
    
    include_once __DIR__ . "/../src/validarPropina/select.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamentos</title>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/CA-propina.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>
<body>
    
    <header>
        <div class="logo">
           <a href="../template/CA.php"><h2>CA</h2></a>
        </div>
    </header>
    
    <main>
        <article>

            <section>
                <div class="container-pagamento">

                    <div class="titulo">
                        <h3>Pagamentos <i class="fas fa-check-circle"></i></h3>
                        <select name="" id="pagamento">
                            <option>Forma de pagamento</option>
                            <option value="Numerario">Númerario</option>
                            <option value="Multicaixa">Multicaixa</option>
                            <option value="Recibo do ATM">Recibo do ATM</option>
                        </select>
                    </div>

                    <div class="dado-pessoal">
                        <b><?php echo $nomeAluno?></b>
                        <i class="fas fa-user-alt"></i>
                    </div>

                    <div class="sub-mes">
                        <form action="../src/validarPropina/actualizar.php" method="post">

                         <div class="item-mes">  

                            <input type="hidden" id="tipoPagamento" name="formaPaga" value="">
                            <input type="hidden" id="mesPago" name="" value="">
                            <input type="hidden" name="ida" value="<?php echo $idAluno?>">

                             <div>
                                 <label for="">Janeiro</label>
                                 <select name="Janeiro" id="mes">
                                    <option selected><?php echo $J?></option>
                                    <option value="Não Pago">Não Pago</option>
                                    <option value="Pago">Pago</option>
                                 </select>
                             </div>

                             <div>
                                <label for="">Fevereiro</label>
                                <select name="Fevereiro" id="mes">
                                   <option selected><?php echo $F?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Março</label>
                                <select name="Marco" id="mes">
                                    <option selected><?php echo $Mar?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Abril</label>
                                <select name="Abril" id="">
                                    <option selected><?php echo $A?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Maio</label>
                                <select name="Maio" id="">
                                   <option selected><?php echo $Mai?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Junho</label>
                                <select name="Junho" id="">
                                   <option selected><?php echo $Ju?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Julho</label>
                                <select name="Julho" id="">
                                   <option selected><?php echo $Jul?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Agosto</label>
                                <select name="Agosto" id="">
                                   <option selected><?php echo $Ag?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Setembro</label>
                                <select name="Setembro" id="">
                                   <option selected><?php echo $S?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Outubro</label>
                                <select name="Outubro" id="">
                                   <option selected><?php echo $O?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Novembro</label>
                                <select name="Novembro" id="">
                                   <option selected><?php echo $N?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Dezembro</label>
                                <select name="Dezembro" id="">
                                   <option selected><?php echo $D?></option>
                                   <option value="Não Pago">Não Pago</option>
                                   <option value="Pago">Pago</option>
                                </select>
                            </div>

                        </div> 

                         <div id="pagar">
                            <i class=""></i>
                             <input type="submit" name="Pagamento" value="Enviar">
                         </div>

                        </form>
                    </div>

                </div>
            </section>

        </article>
    </main>

    <script src="../JS/PagaCA.js"></script>

</body>
</html>