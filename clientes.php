<?php
header('Content-Type: text/html; charset=utf-8');
require_once "config.php";
$erro = false;

/*GRAVA DADOS DO CLIENTE NOVO NO BANCO DE DADOS*/
if (isset($_POST['salvar'])){

  $apelido = $_POST['cad_apelido'];
  $nome = $_POST['cad_nomeCompl'];
  $tel = $_POST['cad_tel'];
  $cel = $_POST['cad_cel'];
  $email = $_POST['cad_email'];
  $niver = $_POST['cad_niver'];
  $end = $_POST['cad_end'];
  $cep = $_POST['cad_cep'];
  $num = $_POST['cad_num'];
  $compl = $_POST['cad_compl'];
  $bairro = mysqli_real_escape_string($mysqli,$_POST['cad_bairro']);
  $cidade = $_POST['cad_cidade'];
  $uf = $_POST['cad_uf'];
  $obs = $_POST['cad_obs'];

  $insereNoBanco = "INSERT INTO cadastro (nome_apelido, nome_completo, tel, cel, email, niver, endr,cep,num,comp,bairro,cidade,uf,obs) values ('$apelido','$nome','$tel','$cel','$email','$niver','$end','$cep','$num','$compl','$bairro','$cidade','$uf','$obs')";


  if ($mysqli->query($insereNoBanco)) {
    echo"<script>alert('Sucesso')</script>";
  }else {
    $erro = true;
  }
}
 ?>
<section>
    <header>
        <h1 class="cd_title">
            Cadastro de Clientes
        </h1>
    </header>
    <div class="container">
        <!--Listas-->
        <article>
            <div class="container-btn-busca">
                <input type="text" class="input-buscar" placeholder="Buscar Clientes"/>
                <button class="btn_buscar" name="btnLocalizar">Buscar</button>
            </div>
            <div class="container-lista">
                <?php
                    //Faz seleciona todos os dados da tabela cadastro no banco de dados e ordena por uma coluna
                    $consultaBanco = "SELECT * FROM `cadastro` ORDER BY nome_apelido ASC";
                    //Faz uma consulta ao banco de dados
                    if ($result = $mysqli ->query($consultaBanco)):
                ?>
                    <ul>
                        <?php
                            while ($row=$result->fetch_assoc()):
                        ?>
                            <a href="?pagina=clientes#modal-altera-cadastro&id=<?php echo $row["id"]?>">
                                <li>
                                    <?php echo $row["nome_apelido"]?>
                                </li>
                            </a>
                        <?php
                            endwhile;
                        ?>
                    </ul>
                <?php
                    endif;
                ?>
            </div>
        </article>
        <!--Cadastros-->
        <aside>
            <a href="#modal-altera-cadastro" ><div class="altera-cadastro"></div></a>
            <!--INICIO FORM DE VISUALIZAÇÃO DE CADASTRO-->
            <form class="form-default">
                <div class="container-form1 container-form1-clientes">
                    <label for="nome">Nome ou Apelido:</label>
                    <input type="text" id="nome" disabled/>
                    <label for="nome_compl">Nome Completo : </label>
                    <input type="text" id="nome_compl"/>

                    <label for="tel">Telefone: </label>
                    <input type="tel" id="tel"/>

                    <label for="cel" class="input60">Celular: </label>
                    <input type="tel" id="cel"/>

                    <label for="email">E-mail: </label>
                    <input type="email" id="email"/>

                    <label for="niver">Aniversário: </label>
                    <input type="date" id="niver"/>
                </div>

                <div class="container-form2">
                    <label>Endereço: </label>
                </div>

                <div class="container-form3">
                    <div class="container-form3-box">
                        <label for="cep">CEP: </label>
                        <input type="number" class="label93" id="cep"/>
                        <br/>

                        <label for="end">Endereço: </label>
                        <input type="text" id="end"/>
                        <br/>

                        <label for="num">Número: </label>
                        <input type="number" class="input60" id="num"/>

                        <label for="comp" class="label93">Complemento: </label>
                        <input type="text" class="input209" id="comp"/>
                        <br/>

                        <label for="bairro">Bairro: </label>
                        <input type="text" id="bairro"/>
                        <br/>

                        <div class="container-uf-cidade">
                            <div class="content-cidade">
                                <label for="cidade">Cidade: </label>
                                <input type="text" class="input260" id="cidade"/>
                                <br/>
                            </div>
                            <div class="content-uf">
                                <label for="uf">Estado: </label>
                                <select class="input60 select-uf" id="uf">
                                    <option value="---">---</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form4">
                    <div class="lab-2">
                        <label for="obs">Observações: </label>
                    </div>
                    <div class="container-form-obs-tx">
                        <textarea id="obs" ></textarea>
                        <br/>
                    </div>
                </div>
            </form>
            <!--FIM FORM DE VISUALIZAÇÃO DE CADASTRO-->
        </aside>

        <!--INICIO ALTERA CADASTRO MODAL-->
        <aside id="modal-altera-cadastro" class="modal-alteara-cadastro">
            <div class="modal-header">
                <h1>Cliente
                    <a href="?pagina=clientes" target="_self">X</a>
                </h1>
            </div>
            <div class="modal-topo">
                <h1>Alterar Cadastro</h1>
            </div>
            <!--INICIO FORM DE CADASTRO-->
            <form class="form-default modal-form-default" method="post" action="">
                <div class="container-form1 container-form1-clientes">
                    <label for="nome">Nome ou Apelido:</label>
                    <input type="text" id="nome"/>
                    <label for="nome_compl">Nome Completo : </label>
                    <input type="text" id="nome_compl"/>

                    <label for="tel">Telefone: </label>
                    <input type="tel" id="tel"/>

                    <label for="cel" class="input60">Celular: </label>
                    <input type="tel" id="cel"/>

                    <label for="email">E-mail: </label>
                    <input type="email" id="email"/>

                    <label for="niver">Aniversário: </label>
                    <input type="date" id="niver"/>
                </div>

                <div class="container-form2">
                    <label>Endereço: </label>
                </div>

                <div class="container-form3">
                    <div class="container-form3-box">
                        <label for="cep">CEP: </label>
                        <input type="number" class="label93" id="cep"/>
                        <br/>

                        <label for="end">Endereço: </label>
                        <input type="text" id="end"/>
                        <br/>

                        <label for="num">Número: </label>
                        <input type="number" class="input60" id="num"/>

                        <label for="comp" class="label93">Complemento: </label>
                        <input type="text" class="input209" id="comp"/>
                        <br/>

                        <label for="bairro">Bairro: </label>
                        <input type="text" id="bairro"/>
                        <br/>
                        <div class="container-uf-cidade">
                            <div class="content-cidade">
                                <label for="cidade">Cidade: </label>
                                <input type="text" class="input260" id="cidade"/>
                                <br/>
                            </div>
                            <div class="content-uf">
                                <label for="uf">Estado: </label>
                                <select class="input60" id="uf">
                                    <option value="---">---</option>
                                    <option value="RJ">RJ</option>
                                    <option value="SP">SP</option>
                                    <option value="MG">MG</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-container-form4">
                    <div class="lab-2">
                        <label for="obs">Observações: </label>
                    </div>
                    <div class="modal-container-form-obs-tx">
                        <textarea id="obs"></textarea>
                        <br/>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="modal_content_button">
                        <input type="submit" value="Salvar">
                        <a href="?pagina=clientes" target="_self"><input type="button" value="Cancelar"></a>
                    </div>
                </div>
            </form>
            <!--FIM FORM ALTERA CADASTRO MODAL-->
        </aside>
        <!--FIM MODAL-->


        <!--INICIO NOVO CADASTRO MODAL-->

        <!--AQUI FAZ A VERIFICAÇÃO SE OS DADOS FORAM INSERIDOS COM SUCESSO OU NÃO-->
        <?php
        if (isset($erro)&&$erro==true) {
          echo "<script>alert('Houve um erro ao cadastrar o cliente')</script>";
        }
        ?>

        <aside id="modal-novo-cliente">
            <div class="modal-header">
                <h1>Cliente
                    <a href="?pagina=clientes" target="_self">X</a>
                </h1>
            </div>
            <div class="modal-topo">
                <h1>Novo Cliente</h1>
            </div>

            <!--INICIO FORM DE CADASTRO-->
            <form class="form-default modal-form-default" method="POST" action="">
                <div class="container-form1 container-form1-clientes">
                    <label for="nome">Nome ou Apelido:</label>
                    <input type="text" id="nome" name="cad_apelido"/>
                    <label for="nome_compl">Nome Completo : </label>
                    <input type="text" id="nome_compl" name="cad_nomeCompl"/>

                    <label for="tel">Telefone: </label>
                    <input type="tel" id="tel" name="cad_tel"/>

                    <label for="cel" class="input60">Celular: </label>
                    <input type="tel" id="cel" name="cad_cel"/>

                    <label for="email">E-mail: </label>
                    <input type="email" id="email" name="cad_email"/>

                    <label for="niver">Aniversário: </label>
                    <input type="date" id="niver" name="cad_niver"/>
                </div>

                <div class="container-form2">
                    <label>Endereço: </label>
                </div>

                <div class="container-form3">
                    <div class="container-form3-box">
                        <label for="cep">CEP: </label>
                        <input type="number" class="label93" id="cep" name="cad_cep"/>
                        <br/>

                        <label for="end">Endereço: </label>
                        <input type="text" id="end" name="cad_end"/>
                        <br/>

                        <label for="num">Número: </label>
                        <input type="number" class="input60" id="num" name="cad_num"/>

                        <label for="comp" class="label93">Complemento: </label>
                        <input type="text" class="input209" id="comp" name="cad_compl"/>
                        <br/>

                        <label for="bairro">Bairro: </label>
                        <input type="text" id="bairro" name="cad_bairro"/>
                        <br/>
                        <div class="container-uf-cidade">
                            <div class="content-cidade">
                                <label for="cidade">Cidade: </label>
                                <input type="text" class="input260" id="cidade" name="cad_cidade"/>
                                <br/>
                            </div>
                            <div class="content-uf">
                                <label for="uf">Estado: </label>
                                <select class="input60" id="uf" name="cad_uf">
                                    <option value="---">---</option>
                                    <option value="RJ">RJ</option>
                                    <option value="SP">SP</option>
                                    <option value="MG">MG</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-container-form4">
                    <div class="lab-2">
                        <label for="obs">Observações: </label>
                    </div>
                    <div class="modal-container-form-obs-tx">
                        <textarea id="obs" name="cad_obs"></textarea>
                        <br/>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="modal_content_button">
                        <input type="submit" value="Salvar" name="salvar">
                        <a href="?pagina=clientes" target="_self"><input type="button" value="Cancelar"></a>
                    </div>
                </div>
            </form>
            <!--FIM NOVO CADASTRO MODAL-->
        </aside>
        <!--FIM MODAL-->
    </div>
</section>
<!--Botões-->
<footer>
    <div class="btn_footer">
        <a href="#modal-novo-cliente"><input type="button" name="novo" value="Novo"/></a>
        <a href="#modal-altera-cadastro"><input type="button" name="alterar" value="Alterar"/></a>
        <input type="button" name="excluir" value="Excluir"/>
        <input type="button" name="restaurar" value="Restaurar"/>
        <a href="?pagina=principal.php"><input type="button" name="fechar" value="Fechar"/></a>
    </div>
</footer>