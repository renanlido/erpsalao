<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name="author" content="Renan Oliveira">
    <meta name="description" content="Exercício de Criação">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo">
        <a href="?pagina=principal.php">
            <img src="img/logo espaço dellas.png" alt="Logo topo"/>
        </a>
    </div>
    <menu>
        <ul>
            <li>
                <a href="#" class="cadastros">Cadastros</a>
                <ul>
                    <li>
                        <a href="?pagina=clientes" class="clientes">Clientes</a>
                    </li>
                    <li>
                        <a href="?pagina=profissionais" class="profissionais">Profissionais</a>
                    </li>
                    <li>
                        <a href="?pagina=servicos" class="serviços">Serviços</a>
                    </li>
                    <li>
                        <a href="#" class="produtos">Produtos</a>
                    </li>
                    <li>
                        <a href="#" class="cartoes">Cartões</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="agenda">Agenda</a>
            </li>
            <li>
                <a href="#" class="caixa">Caixa</a>
                <ul>
                    <li>
                        <a href="?pagina=fluxo_caixa">Fluxo de Caixa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="financeiro">Financeiro</a>
            </li>
            <li>
                <a href="#" class="salarios">Salarios e Comissões</a>
            </li>
            <li>
                <a href="#" class="relatorios">Relatórios</a>
            </li>
            <li>
                <a href="#" class="preferencias">Preferências</a>
            </li>
        </ul>

    </menu>
</header>
<section>
    <?php
    $pagina = isset($_GET['pagina'])? $_GET['pagina']:null;
    switch ($pagina) {

        case "clientes":
            include "clientes.php";
            break;

        case 'fluxo_caixa':
            include "fluxo_caixa.php";
            break;

        case 'profissionais':
            include "profissionais.php";
            break;

        case 'servicos':
            include "servicos.php";
            break;

        default:
            include "principal.php";
            break;
    }
    ?>
</section>
</body>
</html>
