<section>
    <header>
        <h1 class="cd_title">
            Cadastro de Profissionais
        </h1>
    </header>
    <div class="container">
        <!--Listas-->
        <article>
            <div class="container-btn-busca">
                <input type="text" class="input-buscar" placeholder="Buscar Profissional"/>
                <button class="btn_buscar" name="btnbuscar">Buscar</button>
            </div>
            <div class="container-lista container-lista-profissionais">
                <ul>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                    <li>
                        Nome
                    </li>
                </ul>
            </div>
        </article>
        <!--Cadastros-->
        <aside>
            <!--Inicio divisão em abas-->
            <nav class="nav_tabs">
                <ul>
                    <li>
                        <input type="radio" id="tab1" class="rd_tab" name="tabs" checked>
                        <label for="tab1" class="tab_label">Dados</label>
                        <div class="tab-content">
                            <!--INICIO FORM DE CADASTRO-->
                            <!--TEM QUE DESABILITAR COM desabled OS INPUT!!!-->
                            <form class="form-default">
                                <div class="container-form1">
                                    <label for="nome">Nome ou Apelido:</label>
                                    <input type="text" id="nome"/>
                                    <label for="nome">Nome ou Apelido:</label>
                                    <input type="text" id="nome"/>
                                    <label for="nome">Nome ou Apelido:</label>
                                    <input type="text" id="nome"/>

                                </div>

                                <div class="container-form2">
                                    <label>Endereço: </label>
                                </div>

                                <div class="container-form3">
                                    <div class="container-form3-box">
                                        <label for="cep">CEP: </label>
                                        <input type="number" class="label93" id="cep"/>
                                        <br/>

                                    </div>
                                </div>
                                <div class="container-form4">
                                    <div class="lab-2">
                                        <label for="obs">Observações: </label>
                                    </div>
                                    <div class="container-form-obs-tx">
                                        <textarea name="obs" id="obs"></textarea>
                                        <br/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <li>
                        <input type="radio" name="tabs" class="rd_tab" id="tab2">
                        <label for="tab2" class="tab_label">Habilidades</label>
                        <div class="tab-content">

                            <div class="container-tab-top">
                                <p>Selecione as habilidades do profiossional:</p>
                                <div class="icon-info" title="Selecione as habilidades do profissional etc etc">
                                    <div class="icon-info-dentro">
                                        <p>i</p>
                                    </div>
                                </div>
                            </div>

                            <div class="container-tab-bottom">
                                <ul>
                                    <li>
                                        <input type="checkbox" id="estetica">
                                        <label for="estetica">Estética Facial</label>
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="sobrancelha">
                                                <label for="sobrancelha">Sobrancelha</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="henna">
                                                <label for="henna">Sobrancelha Henna</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="unhas">
                                        <label for="unhas">Manicure e Pedicure</label>
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="manicure">
                                                <label for="manicure">Manicure</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="pedicure">
                                                <label for="pedicure">Pedicure</label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </aside>
    </div>
</section>
<!--Botões-->
<footer>
    <div class="btn_footer">
        <input type="button" name="novo" value="Novo"/>
        <input type="button" name="alterar" value="Alterar"/>
        <input type="button" name="excluir" value="Excluir"/>
        <input type="button" name="restaurar" value="Restaurar"/>
        <a href="?pagina=principal.php"><input type="button" name="fechar" value="Fechar"/></a>
    </div>
</footer>
