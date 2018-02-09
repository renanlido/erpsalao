<?php
header('Content-Type: text/html; charset=utf-8');
require_once "config.php";
$erro = false;

//GRAVA DADOS DO CLIENTE NOVO NO BANCO DE DADOS
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
        <!--INICIA LISTA DE CLIENTES-->
        <article>
            <div class="container-btn-busca">
                <input type="text" class="input-buscar" placeholder="Buscar Clientes"/>
                <button class="btn_buscar" name="btnLocalizar">Buscar</button>
            </div>
            <div id="container-lista" class="container-lista">
                <?php
                //Faz seleciona todos os dados da tabela cadastro no banco de dados e ordena por uma coluna
                $consultaBanco = "SELECT * FROM `cadastro` ORDER BY nome_apelido ASC";
                //Faz uma consulta ao banco de dados
                if ($result = $mysqli ->query($consultaBanco)):
                ?>
                  <ul>
                    <?php
                    while ($row = $result->fetch_assoc()):
                    ?>
                      <li class="cliente-Lista" data-ref="<?php echo $row["id"]?>">
                        <?php echo $row["nome_apelido"]?>
                      </li>
                    <?php
                    endwhile;
                    ?>
                  </ul>
                <?php
                endif;
                ?>
            </div>
        </article>
        <!--FINAL LISTA DE CLIENTES-->


        <!--INICIA SEQUENCIA DE MODAIS-->

        <!--INICIA MODAL DE VISUALIZAÇÃO DE CADSTRO-->
        <aside>
            <!-- <a href="#modal-altera-cadastro" ><div class="altera-cadastro"></div></a> -->
            <form id="form-cliente" class="form-default">
                <div class="container-form1 container-form1-clientes">
                    <label for="nome">Nome ou Apelido:</label>
                    <input type="text" name="nome" id="nome" disabled/>
                    <label for="nome_compl">Nome Completo : </label>
                    <input type="text" name="nome_compl" id="nome_compl"/>

                    <label for="tel">Telefone: </label>
                    <input type="tel" name="tel" id="tel"/>

                    <label for="cel" class="input60">Celular: </label>
                    <input type="tel" name="cel" id="cel"/>

                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email"/>

                    <label for="niver">Aniversário: </label>
                    <input type="date" name="niver" id="niver"/>
                </div>

                <div class="container-form2">
                    <label>Endereço: </label>
                </div>

                <div class="container-form3">
                    <div class="container-form3-box">
                        <label for="cep">CEP: </label>
                        <input type="number" name="cep" class="label93" id="cep"/>
                        <br/>

                        <label for="end">Endereço: </label>
                        <input type="text" name="end" id="end"/>
                        <br/>

                        <label for="num">Número: </label>
                        <input type="number" name="num" class="input60" id="num"/>

                        <label for="comp" class="label93">Complemento: </label>
                        <input type="text" class="input209" name="comp" id="comp"/>
                        <br/>

                        <label for="bairro">Bairro: </label>
                        <input type="text" name="bairro" id="bairro"/>
                        <br/>

                        <div class="container-uf-cidade">
                            <div class="content-cidade">
                                <label for="cidade">Cidade: </label>
                                <input type="text" class="input260" name="cidade" id="cidade"/>
                                <br/>
                            </div>
                            <div class="content-uf">
                                <label for="uf">Estado: </label>
                                <select class="input60 select-uf" name="uf" id="uf">
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
                        <textarea name="obs" id="obs" ></textarea>
                        <br/>
                    </div>
                </div>

                <input type="submit" name="submit" value="Salvar" />
            </form>
        </aside>
        <!--FINALIZA MODAL DE VISUALIZAÇÃO DE CADASTRO-->


        <!--INICIO MODAL DE ALTERAÇÃO DE CADASTRO-->
        <aside id="modal-altera-cadastro" class="modal-altera-cadastro">
            <div class="modal-header">
                <h1>Cliente
                    <span id="">X</span>
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
        </aside>
        <!--FINALIZA MODAL DE ALTERAÇÃO DE CADASTRO-->


        <!--INICIA MODAL DE NOVO CADSTRO-->

        <?php
        //AQUI FAZ A VERIFICAÇÃO SE OS DADOS FORAM INSERIDOS COM SUCESSO OU NÃO
        if (isset($erro)&&$erro==true) {
          echo "<script>alert('Houve um erro ao cadastrar o cliente')</script>";
        }
        ?>

        <aside class="container_modal_novo_cliente" id="container_novo_cliente_modal">
            <div class="modal-novo-cliente">
                <div class="modal-header">
                    <h1>Cliente
                        <span id="close_modal">&times;</span>
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
                            <input type="button" id="btn_cancelar" value="Cancelar">
                        </div>
                    </div>
                </form>
            </div>
        </aside>
        <!--FINALIZA MODAL DE NOVO CADASTRO-->

        <!--FINAL DA SEQUENCIA DE MODAIS-->
    </div>
</section>
<!--Botões-->
<footer>
    <div class="btn_footer">
        <button id="novoClienteBTN">Novo</button>
        <a href="#modal-altera-cadastro"><input type="button" name="alterar" value="Alterar"/></a>
        <input type="button" name="excluir" value="Excluir"/>
        <input type="button" name="restaurar" value="Restaurar"/>
        <a href="?pagina=principal.php"><input type="button" name="fechar" value="Fechar"/></a>
    </div>
</footer>

<script src="js/main.js"></script>

<script>
//Abrir e fechar modal
var modalNovoCLiente = document.getElementById('container_novo_cliente_modal');
var novoClienteBtn= document.getElementById('novoClienteBTN');
var closeModal= document.getElementById('close_modal');
var btnCancelar = document.getElementById('btn_cancelar');

novoClienteBtn.addEventListener('click', openModal);
closeModal.addEventListener('click', fechaModal);
btnCancelar.addEventListener('click', fechaModal);
window.addEventListener('click', outsideClick);

function openModal() {
    modalNovoCLiente.style.display ='block';
}

function fechaModal(x) {
    if(x.target==closeModal || x.target==btnCancelar){
        modalNovoCLiente.style.display = 'none';
    }
}

function outsideClick(x) {
    if (x.target == modalNovoCLiente){
        modalNovoCLiente.style.display = 'none';
    }

}

////////////////////////////////////////////////////

$(document).ready(function(){

  var cliente_id;
  var cliente_data;

  /*
   * Ao clicar em um cliente na lista
   */
  $('#container-lista li').click(function() {

    // Interface
    $('.cliente-Lista').removeClass('ativo');
    $(this).addClass('ativo');

    // Pega id
    cliente_id = $(this).attr('data-ref');

    // Carregamento via ajax
    ajax_load_cliente(cliente_id);
  });


  /*
   * Carregamento via ajax
   */
  function ajax_load_cliente(cliente_id) {
    $('.aviso-loading').show();

    $.ajax({
      url: "ajax/cliente.php?id=" + cliente_id,
      beforeSend: function( xhr ) {
        xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
      }
    })
    .done(function(data) {
      if (console && console.log) {
        $('.aviso-loading').hide();

        //console.log("Dados carregados:", data.slice(0, 100));
        // Converte JSON em formato para ser utilizado
        cliente_data = JSON.parse(data);

        // Insere os dados nos inputs
        $('#nome').val(cliente_data.nome_apelido);
        $('#nome_compl').val(cliente_data.nome_completo);
        $('#tel').val(cliente_data.tel);
        $('#cel').val(cliente_data.cel);
        $('#email').val(cliente_data.email);
        $('#niver').val(cliente_data.niver);
        $('#cep').val(cliente_data.cep);
        $('#end').val(cliente_data.endr);
        $('#num').val(cliente_data.num);
        $('#comp').val(cliente_data.comp);
        $('#bairro').val(cliente_data.bairro);
        $('#cidade').val(cliente_data.cidade);
        $('#obs').val(cliente_data.obs);
      }
    })
    .fail(function() {
      alert("Erro ao carregar dados.");
    });
  }


  /*
   * Post via AJAX
   */
  $('#form-cliente').submit(function() {

    var $form = $(this);
    var serializedData = $form.serialize();

    $.ajax({
      type: 'POST',
      // data: {
      //   name: "Rian"
      // },
      data: serializedData,
      url: 'ajax/cliente_update.php?id=' + cliente_id,

      beforeSend : function () {
        $('.aviso-loading').show();
      },
      success : function(data) {
        $('.aviso-loading').hide();
        mostra_sucesso('Salvo com sucesso');
      },
      error : function(a,b,c) {
        alert("Erro ao atualizar dados.");
        //alert('Erro: ' + a[b] + ' ' + c);
      }
    });

    return false;
  });


  function mostra_sucesso(texto) {
    $('.aviso-sucesso').html(texto).show();
    setTimeout(function() {
      $('.aviso-sucesso').fadeOut();
    }, 1500);
  }

})
</script>
