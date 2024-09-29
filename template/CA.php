<?php
    include_once __DIR__ . "/meta.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
    
        <div class="conteiner-inicial"> 

            <!------------------ Menu Lateral -------------------------->
            <?php
                include_once __DIR__ . "/menuLateral.php";
            ?>

            <main>
                <div class="conteiner-intens">
                        <div class="topo-intens">
                            <h3>Painel Principal</h3>
                            
                            <div id="itens">
                                    <span>
                                        <i class="fas fa-bell"></i>
                                        <p><?php echo $TotalAlunos?></p>
                                    </span>
                                    <a href="../src/basededados/logout.php"><i class="fas fa-sign-out-alt" id="sair"></i></a>
                            </div>
                        </div>

                        <!---------- card painel controle----------->

                        <div class="conteiner-card-i">
                            <div id="sub-card-i">

                                    <div id="card-i" class="professor">
                                        <p>Professor</p>
                                        <div class="card">
                                            <i class="fas fa-user-graduate"></i>
                                            <h3> <?php echo $TotalProff?> <small>professores</small></h3>
                                        </div>
                                    </div>

                                    <div id="card-i">
                                        <p>Alunos</p>
                                        <div class="card">
                                            <i class="fas fa-user-friends"></i>
                                            <h3><?php echo $TotalAlunos?> <small>alunos</small></h3>
                                        </div>
                                    </div>

                                    <div id="card-i">
                                        <p>Cursos</p>
                                        <div class="card">
                                            <i class="fas fa-book"></i>
                                            <h3><?php echo $TotalCurso?> <small>cursos</small></h3>
                                        </div>
                                    </div>

                                    <div id="card-i">
                                        <a href="./geral.php">
                                            <p>Geral</p>
                                            <div class="card"> 
                                                <i class="fas fa-cogs"></i>
                                                <p>ESTATISTICA</p>
                                            </div>
                                        </a>
                                    </div>

                            </div>
                        </div>

                            <!--- Conteiner alunos---->
                            <article>
            
                                <section>
                                    <div class="conteiner-alunos  sub-c-alunos">

                                        <!------ Busca por alunos ----->         
                                        <div  class="conteiner-buscar">
                                                <i class="fas fa-times  fecharpesquisa" id="fechar-p-aluno"></i>
                                                <form action="">
                                                    <div class="item-busca">
                                                        <input type="search" id="campoAluno" placeholder="Buscar por Alunos">
                                                        <button type="submit" id="bucarAluno"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </form>

                                                <div id="ResultBuscarAluno">
                                                </div>
                                        </div>

                                        <div class="sub-container">

                                            <div id="topo-conteiner">
                                                    <h3>Lista de Alunos <i class="fas fa-users"></i></h3>
                                                    <span>
                                                        <i class="fas fa-search"  title="Clica para buscar" id="buscarAlunos"></i>
                                                        <p id="novo-aluno">Novo<i class="fas fa-plus"></i></p>
                                                        <i class="fas fa-times" id="fechar"></i>
                                                    </span>
                                            </div>
                                            <!-------------------- Listar Alunos-------------------->
                                            <div id="tabela">
                                                <table>
                                                        <thead>
                                                        <tr>
                                                            <th>#ID</th> <th>Nome</th> <th>Curso</th> <th>Ações</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $sqlA = mysqli_query($conexao, "SELECT aluno.id_aluno, aluno.nome, aluno.sobrenome AS sobrenome, aluno.id_curso, curso.id_curso, curso.nome AS curso
                                                                FROM aluno, curso WHERE curso.id_curso = aluno.id_curso");
                                                                while($aluno = mysqli_fetch_assoc($sqlA)){
                                                                echo "<tr>";
                                                                    echo "<td>". $aluno['id_aluno'] ."</td>";
                                                                    echo "<td>". $aluno['nome'] . ' ' . $aluno['sobrenome']."</td>";
                                                                    echo "<td>". $aluno['curso'] ."</td>";
                                                                    echo "<td id='item'>"; 
                                                                    echo "<a href='C-edit-aluno.php?id_aluno=$aluno[id_aluno]'> <i class='fas fa-user-edit'></i> </a>";
                                                                    echo "<a href='C-list-aluno.php?id_aluno=$aluno[id_aluno]'> <i class='fas fa-align-justify'></i> </a>";
                                                                    echo "<a href='../src/validarAluno/eliminar.php?id_aluno=$aluno[id_aluno]'> <i class='fas fa-trash-alt'></i> </a>";
                                                                    "</td>";
                                                                echo "</<tr>";
                                                                }
                                                            ?>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                
                                <!--- Add Novo---->
                                <section>
                                    <div class="add-novo conteiner-aluno-n">

                                            <div id="modal-novo">
                                                <div id="topo">
                                                    <h2>Cadastrar Novo</h2>
                                                    <i class="fas fa-times" id="fechar"></i>
                                                </div>

                                                    <form action="../src/validarAluno/novo.php" method="post">
                                                            <div class="form-item">

                                                            <div>
                                                                <i class="fas fa-user"></i>
                                                                <input type="text" name="nome-aluno" placeholder="Nome" required>
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-user-plus"></i>
                                                                <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-venus-double"></i>
                                                                <select name="genero" id="" required>
                                                                    <option selected>Selecione o Genero</option>
                                                                    <option value="Masculino">Masculino</option>
                                                                    <option value="Femenino">Femenino</option>
                                                                </select>
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-sort-numeric-up"></i>
                                                                <input type="text" name="escola" placeholder="escola" required>
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-sort-numeric-up"></i>
                                                                <input type="text" name="num_bi" placeholder="BI" required>
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-phone"></i>
                                                                <input type="text" name="telefone" placeholder="Telefone" required>
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-envelope"></i>
                                                                <input type="email" name="email" placeholder="E-mail" required>
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-map-marker-alt"></i>
                                                                <input type="text" name="bairro" placeholder="Bairro" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <select name="idCurso" id="" required>
                                                                    <option selected>Selecione o curso</option>
                                                                    <?php
                                                                        $sqlD = mysqli_query($conexao, " SELECT *FROM curso");
                                                                        while($Dcurso = mysqli_fetch_assoc($sqlD)){
                                                                            echo "<option value='$Dcurso[id_curso]'>";
                                                                                echo $Dcurso['nome'];
                                                                            "</option>";
                                                                        }
                                                                    ?>
                                                                </select>                                                        
                                                            </div>

                                                            <div>
                                                                <i class="fas fa-exchange-alt"></i>
                                                                <select name="turno" id="" required>
                                                                    <option selected>Selecione o Turno</option>
                                                                    <option value="Manhã">Manhã</option>
                                                                    <option value="Tarde">Tarde</option>
                                                                </select>
                                                            </div>


                                                            <div>
                                                                <textarea name="descricao" id="" cols="30" rows="4" placeholder="Descrição" required></textarea>
                                                            </div>

                                                            <input type="hidden" name="idAdmin" value="<?php echo $idAdmintrador?>">

                                                            </div>

                                                            <center>
                                                                <div>
                                                                    <input type="submit" name="novo" value="Registrar">
                                                                    <input type="reset"  value="Limpar">
                                                                </div>
                                                            </center>
                                                    </form>

                                            </div>
                                    </div>
                                </section>

                            </article>

                            <!--- Conteiner professor---->
                            <article>
                                <section>

                                    <!------ Busca por professor----->         
                                    <div  class="conteiner-buscar contBusca">
                                    <i class="fas fa-times fecharpesquisa" id="fechar-p-proff"></i>
                                            <form action="">
                                                <div class="item-busca">
                                                    <input type="search" name="" id="campoProf" placeholder="Buscar por Professor">
                                                    <button type="submit" id="buscarProf"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>

                                            <div id="ResultBuscarProff">
                                            </div>
                                    </div>

                                    <div class="conteiner-alunos  sub-c-proff">
                                            <div class="sub-container">

                                                <div id="topo-conteiner">
                                                    <h3>Lista de professor <i class="fas fa-user-graduate"></i></h3>
                                                    <span>
                                                        <i class="fas fa-search" id="buscarProff"  title="Clica para buscar"></i>
                                                        <p id="novo-proff">Novo<i class="fas fa-plus"></i></p>
                                                        <i class="fas fa-times" id="fechar"></i>
                                                    </span>
                                                </div>

                                                <div id="tabela">
                                                    <table> 
                                                        <thead>
                                                        <tr>
                                                            <th>#ID</th> <th>Nome</th> <th>Curso</th> <th>Ações</th>
                                                        </tr>
                                                        </thead>
                                                            <tbody>
                                                            <?php
                                                                while($proff = mysqli_fetch_assoc($sqlProff)){
                                                                echo "<tr>";
                                                                    echo "<td>". $proff['id_proff'] ."</td>";
                                                                    echo "<td>". $proff['nome'] ."</td>";
                                                                    echo "<td>". $proff['especialidade'] ."</td>";
                                                                    echo "<td id='item'>"; 
                                                                        echo "<a href='C-edit-professor.php?id_proff=$proff[id_proff]'> <i class='fas fa-user-edit'></i> </a>";
                                                                        echo "<a href='C-list-professor.php?id_proff=$proff[id_proff]'> <i class='fas fa-align-justify'></i> </a>";
                                                                        echo "<a href='../src/validarProfessor/eliminar.php?id_proff=$proff[id_proff]'> <i class='fas fa-trash-alt'></i> </a>";
                                                                    "</td>";
                                                                        echo "</<tr>";
                                                                        }
                                                                ?> 
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                                
                                <!--- Add Novo Professor ---->
                                <section>
                                    <div class="add-novo conteiner-proff-n">

                                            <div id="modal-novo">
                                                <div id="topo">
                                                    <h2>Cadastrar Novo</h2>
                                                    <i class="fas fa-times" id="fechar"></i>
                                                </div>

                                                    <form action="../src/validarProfessor/novo.php" method="post">
                                                            <div class="form-item">

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="nome-proff" placeholder="Nome Professor" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <select name="genero" id="" required>
                                                                    <option selected>Selecione o Genero</option>
                                                                    <option value="Masculino">Masculino</option>
                                                                    <option value="Femenino">Femenino</option>
                                                                </select>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="num_bi" maxlength="12" placeholder="BI" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="telefone" placeholder="Telefone" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="email" name="email" placeholder="E-mail" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="bairro" placeholder="Bairro" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <select name="especialidade" id="" required>
                                                                        <option value="Matemática" selected>Especialidade</option>
                                                                        <option value="Matemática">Matematica</option>
                                                                        <option value="Quimica">Quimica</option>
                                                                        <option value="Inglês">Inglês</option>
                                                                        <option value="Física">Física</option>
                                                                        <option value="Lingua Portuguesa">Lingua Portuguesa</option>
                                                                </select>
                                                            </div>

                                                            <input type="hidden" name="idAdmin" value="<?php echo $idAdmintrador?>">

                                                            </div>

                                                            <center>
                                                                <div>
                                                                    <input type="submit" name="novo" value="Registrar">
                                                                </div>
                                                            </center>
                                                    </form>

                                            </div>
                                    </div>
                                </section>
                            </article>

                            <!--- Conteiner curso---->
                            <article>

                                <section>
                                    <div class="conteiner-alunos  sub-c-curso">

                                            <!------ Busca por curso----->         
                                            <div  class="conteiner-buscar contCurso">
                                                    <i class="fas fa-times fecharpesquisa" id="fechar-p-curso"></i>
                                                    <form action="">
                                                        <div class="item-busca">
                                                            <input type="search" name="" id="campoCurso" placeholder="Buscar por cursos">
                                                            <button type="submit" id="btnCurso"><i class="fas fa-search"></i></button>
                                                        </div>
                                                    </form>

                                                    <div id="ResultBuscarCurso">

                                                    </div>
                                            </div>

                                            <div class="sub-container">
        
                                                <div id="topo-conteiner">
                                                    <h3>Lista de curso <i class="fas fa-book"></i></h3>
                                                    <span>
                                                        <i class="fas fa-search "  title="Clica para buscar" id="buscarCurso"></i>
                                                        <p id="novo-curso">Novo<i class="fas fa-plus"></i></p>
                                                        <i class="fas fa-times" id="fechar"></i>
                                                    </span>
                                                </div>
                                                <!--------------------------- Listar Curso ---------------------------->
                                                <div id="tabela">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>#ID</th> <th>Nome Curso</th> <th>Duração</th> <th>Ações</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                        <?php
                                                                $sql = mysqli_query($conexao, " SELECT *FROM curso");
                                                                while($curso = mysqli_fetch_assoc($sql)){
                                                                    echo "<tr>";
                                                                        echo "<td>". $curso['id_curso'] ."</td>";
                                                                        echo "<td>". $curso['nome'] ."</td>";
                                                                        echo "<td>". $curso['duracao'] ."</td>";
                                                                        echo "<td id='item'>"; 
                                                                            echo "<a href='C-edit-curso.php?id_curso=$curso[id_curso]'> <i class='fas fa-book'></i> </a>";
                                                                            echo "<a href='C-list-curso.php?id_curso=$curso[id_curso]'> <i class='fas fa-align-justify'></i> </a>";
                                                                            echo "<a href='../src/validarCurso/eliminar.php?id_curso=$curso[id_curso]'> <i class='fas fa-trash-alt'></i> </a>";
                                                                                    "</td>";
                                                                        echo "</<tr>";
                                                                        }
                                                                ?>
                                                        </tbody>
                                                    
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                                
                                <!--- Add Novo Curso---->
                                <section>
                                    <div class="add-novo conteiner-curso-n">
        
                                            <div id="modal-novo">
                                                <div id="topo">
                                                    <h2>Novo Curso</h2>
                                                    <i class="fas fa-times" id="fechar"></i>
                                                </div>
        
                                                <form action="../src/validarCurso/novo.php" method="post">
                                                        <div class="form-item">
    
                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="nome-curso" placeholder="Curso" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="disciplina" placeholder="Disciplinas" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <input type="number" name="valor" placeholder="Valor a pagar" required>
                                                            </div>
        
                                                            <div>
                                                                <i class=""></i>
                                                                <input type="text" name="duracao" placeholder="Duração" required>
                                                            </div>

                                                            <div>
                                                                <i class=""></i>
                                                                <select name="professor" id="" required>
                                                                        <option selected>Selecionar Professor</option>
                                                                        <?php
                                                                            $sqlP = mysqli_query($conexao, " SELECT *FROM professor");
                                                                            while($Dprofessor = mysqli_fetch_assoc($sqlP)){
                                                                                echo "<option value='$Dprofessor[id_proff]'>";
                                                                                    echo $Dprofessor['nome'];
                                                                                "</option>";
                                                                            }
                                                                        ?>
                                                                </select>
                                                            </div>

                                                            <input type="hidden" name="administrador" value="<?php echo $idAdmintrador?>">
                                                            
                                                        </div>
    
                                                        <center>
                                                            <div>
                                                                <input type="submit" name="novo" value="Registrar">
                                                            </div>
                                                        </center>

                                                </form>
        
                                            </div>
                                    </div>
                                </section>
        
                            </article>

                            <!--- Conteiner pagamento---->
                            <article>
                                <section>
                                    <div class="conteiner-alunos  sub-c-pagamento">

                                             <!------ Busca por curso----->         
                                             <div  class="conteiner-buscar contPagameto">
                                                    <i class="fas fa-times fecharpesquisa" id="fechar-p-pago"></i>
                                                    <form action="">
                                                        <div class="item-busca">
                                                            <input type="search" name="" id="campoAlunPaga" placeholder="Buscar por Alunos">
                                                            <button type="submit" id="btnPagamento"><i class="fas fa-search"></i></button>
                                                        </div>
                                                    </form>

                                                    <div id="ResultBuscarPagamento">

                                                    </div>
                                            </div>

                                            <div class="sub-container">
        
                                                <div id="topo-conteiner">
                                                    <h3>Pagamento <i class="fas fa-money-check-alt"></i></h3>
                                                    <span>
                                                        <i  title="Clica para buscar" class="fas fa-search" id="buscarPago"></i>
                                                        <i class="fas fa-times" id="fechar"></i>
                                                    </span>
                                                </div>
        
                                                <div id="tabela">
                                                    <table>
                                                            <thead>
                                                            <tr>
                                                                <th>#ID</th> <th>Nome</th> <th>Curso</th> <th>Ações</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $sqlPaga = mysqli_query($conexao, " SELECT *FROM aluno");
                                                                    while($alunoP = mysqli_fetch_assoc($sqlPaga)){
                                                                    echo "<tr>";
                                                                        echo "<td>". $alunoP['id_aluno']."</td>";
                                                                        echo "<td>". $alunoP['nome'] .' '. $alunoP['sobrenome']."</td>";
                                                                        echo "<td>". $alunoP['id_curso'] ."</td>";
                                                                        echo "<td id='item'>"; 
                                                                            echo "<a href='CA-propina.php?id_aluno=$alunoP[id_aluno]'> <i class='fas fa-money-check-alt'></i> </a>";
                                                                            echo "<a href='C-list-pagamento.php?id_aluno=$alunoP[id_aluno]'> <i class='fas fa-align-justify'></i> </a>";
                                                                        "</td>";
                                                                    echo "</<tr>";
                                                                }
                                                                ?>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                            </article>
                            
                </div>
            </main>

            <?php
                include_once __DIR__ . "/meta2.php";
            ?>