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
                            <a href="#modal-novo-profissional" ><div class="altera-profissional"></div></a>
                            <!--INICIO FORM DE CADASTRO-->
                            <!--TEM QUE DESABILITAR COM desabled OS INPUT!!!-->
                            <form class="form-default">
                                <div class="container-form1">
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
                                        <textarea name="obs" id="obs"></textarea>
                                    </div>
                                </div>
                                <div class="container_chkbx">
                                    <div>
                                        <input type="checkbox" id="mostra_agenda"/>
                                        <label for="mostra_agenda">Mostrar na Agenda</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="agenda_online"/>
                                        <label for="agenda_online">Utiliza Agendamento Online</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <li>
                        <input type="radio" name="tabs" class="rd_tab" id="tab2">
                        <label for="tab2" class="tab_label">Habilidades</label>
                        <div class="tab-content">
                            <a href="#modal-novo-profissional" ><div class="altera-profissional"></div></a>
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

                    <li>
                        <input type="radio" name="tabs" class="rd_tab" id="tab3">
                        <label for="tab3" class="tab_label">Horários</label>
                        <div class="tab-content">
                            <a href="#modal-novo-profissional" ><div class="altera-profissional"></div></a>
                            <div class="container-tab-top">
                                <p>Configura os horários de trabalho do profissional:</p>
                                <div class="icon-info" title="Configura os horários de trabalho do profissional etc etc">
                                    <div class="icon-info-dentro">
                                        <p>i</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-tab-bottom">
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios">
                                    <div class="container-dias-semana">Seg:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Ter:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Qua:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Qui:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Sex:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Sab:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </aside>

        <!--INICIO MODAL-->
        <div id="modal-novo-profissional">
            <div class="modal-header">
                <h1>Profissional
                    <a href="?pagina=profissionais" target="_self">X</a>
                </h1>
            </div>
            <div class="modal-topo-profissionais">
                <h1 class="modal-header-h1">Novo Profissional</h1>
            </div>
            <aside class="modal-profissional-aside">
            <!--Inicio divisão em abas-->
            <nav class="nav_tabs">
                <ul>
                    <li>
                        <input type="radio" id="modal-tab1" class="rd_tab" name="tabs">
                        <label for="modal-tab1" class="tab_label">Dados</label>
                        <div class="tab-content">
                            <!--INICIO FORM DE CADASTRO-->
                            <!--TEM QUE DESABILITAR COM desabled OS INPUT!!!-->
                            <form class="form-default modal-form-default">
                                <div class="container-form1">
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
                                        <textarea name="obs" id="obs"></textarea>
                                    </div>
                                </div>
                                <div class="container_chkbx">
                                    <div>
                                        <input type="checkbox" id="mostra_agenda"/>
                                        <label for="mostra_agenda">Mostrar na Agenda</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="agenda_online"/>
                                        <label for="agenda_online">Utiliza Agendamento Online</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <li>
                        <input type="radio" name="tabs" class="rd_tab" id="modal-tab2">
                        <label for="modal-tab2" class="tab_label">Habilidades</label>
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

                    <li>
                        <input type="radio" name="tabs" class="rd_tab" id="modal-tab3">
                        <label for="modal-tab3" class="tab_label">Horários</label>
                        <div class="tab-content">
                            <div class="container-tab-top">
                                <p>Configura os horários de trabalho do profissional:</p>
                                <div class="icon-info" title="Configura os horários de trabalho do profissional etc etc">
                                    <div class="icon-info-dentro">
                                        <p>i</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-tab-bottom">
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios">
                                    <div class="container-dias-semana">Seg:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Ter:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Qua:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Qui:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Sex:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                                <!--Inicio seleção de horario-->
                                <div class="container-selecao-horarios margin-top">
                                    <div class="container-dias-semana">Sab:</div>
                                    <div class="container-horairos">
                                        <div class="select-float">
                                            <p class="title-select">Das:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="select-float select-float-last">
                                            <p class="title-select">Até:</p>
                                            <label for="horas">
                                                <select class="select_horas" id="horas">
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="btn_excluir" title="Excluir horário">-</div>
                                    </div>
                                    <div class="btn_adicionar" title="Adicionar horário">+</div>
                                </div>
                                <!--Fim seleção de horário-->
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="modal-footer">
                <div class="modal_content_button">
                    <input type="submit" value="Salvar">
                    <a href="?pagina=profissionais" target="_self"><input type="button" value="Cancelar"></a>
                </div>
            </div>
        </aside>
        </div>
        <!--FIM MODAL-->
    </div>
</section>
<!--Botões-->
<footer class="container-footer">
    <div class="btn_footer">
        <input type="button" name="novo" value="Novo"/>
        <input type="button" name="alterar" value="Alterar"/>
        <input type="button" name="excluir" value="Excluir"/>
        <input type="button" name="restaurar" value="Restaurar"/>
        <a href="?pagina=principal.php"><input type="button" name="fechar" value="Fechar"/></a>
    </div>
</footer>
