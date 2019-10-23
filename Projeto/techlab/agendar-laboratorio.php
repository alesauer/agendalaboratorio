<?php require_once('adminphp\sessao.php'); ?>

<!DOCTYPE html>
<html class="ls-pre-panel">
    <head>
        <title>Agendamento de Laboratórios</title>

        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-painel1.png">
        <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-painel1.png">
        <meta name="apple-mobile-web-app-title" content="Painel 1">
        <script src="locaweb/mediaqueries-ie.js" type="text/javascript"></script>
        <script src="locaweb/html5shiv.js" type="text/javascript"></script>
        <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/agendar-laboratorio.css">
    </head>
    <body class="documentacao documentacao_exemplos documentacao_exemplos_painel1 documentacao_exemplos_painel1_pre-painel documentacao_exemplos_painel1_pre-painel_index">

        <div class="ls-topbar ls-topbar-gray" id="barra">

                <!-- Barra inicial (Onde contém o titulo) -->
            <div class="ls-notification-topbar">
                <h1 class="titulo-principal">Agendamento de Laboratórios</h1>
            </div>
            <span class="ls-show-sidebar ls-ico-menu"></span>
        </div>
        <!--Barra Vertical de Menu (Contém a logo de usuário,logo do pitagoras e os menus para acessar)-->
<?php require_once('./model/menu.php'); ?>
        <!-- Aqui inicia o conteúdo da pagina -->
        <main class="ls-main ">
            <div class="container-fluid"> 
                                <!--Feito por Tainá :D-->
                <!--Aqui aparece o sub-titulo e o botao buscar-->
                <h2 class="sub-titulo">Laboratório</h2> 
                <a href="agendar-data.html"><button type="button" class="ls-btn-dark ls-ico-shaft-right" id="botao-proximo">Próximo</button></a>
                <button type="button" class="ls-btn-dark ls-ico-search" id="botao-buscar">Buscar</button>
                <!--Aqui aparece o formulario de buscar para o usuario inserir o que deseja pesquisar-->
                <form action="" class="ls-form ls-form-horizontal row" id="formulario-01">
                    <fieldset>
                        <label class="ls-label col-md-5 col-xs-12" id="pesquisar">
                            <b class="ls-label-text">Pesquisar:</b>
                            <input type="text" placeholder="Informe o que deseja pesquisar" class="ls-field" required>
                        </label>

                        <label class="ls-label col-md-4 col-xs-12">
                            <b class="ls-label-text">Filtrar por:</b>
                            <div class="ls-custom-select">
                                <select name="" class="ls-select">
                                    <option>Selecione o filtro</option>
                                    <option>Tipo 01</option>
                                    <option>Tipo 02</option>
                                    <option>Tipo 03</option>
                                    <option>Tipo 04</option>
                                    <option>Tipo 05</option>
                                </select>
                            </div>
                        </label>

                    </fieldset>
                </form>
                <!--Fim do formulario-->
                <!--Nesta tabela aparecerá os resultados da pesquisa realizada pelo usuario e o botao para selecionar o laboratorio desejado-->
                <table class="ls-table ls-table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Laboratório</th>
                            <th>Sala</th>
                            <th>Andar</th>
                            <th>Selecionar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="" title="" class="ls-ico-screen">Informática</a></td>
                            <td>Laboratório Avançado 1</td>
                            <td>25</td>
                            <td>2º</td>
                            <td><button class="ls-ico-checkmark" id="botao-selecionar"></button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><a href="" title="" class="ls-ico-edit-admin">Desenho</a></td>
                            <td>Laboratório Desenho 1</td>
                            <td>18</td>
                            <td>Sub-solo 2</td>
                            <td><button class="ls-ico-checkmark" id="botao-selecionar"></button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><a href="" title="" class="ls-ico-screen">Informática</a></td>
                            <td>Laboratório Avançado 1</td>
                            <td>25</td>
                            <td>2º</td>
                            <td><button class="ls-ico-checkmark" id="botao-selecionar"></button></td>

                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td><a href="" title="" class="ls-ico-edit-admin">Desenho</a></td>
                            <td>Laboratório Desenho 1</td>
                            <td>18</td>
                            <td>Sub-solo 2</td>
                            <td><button class="ls-ico-checkmark" id="botao-selecionar"></button></td>

                        </tr>
                    </tbody>
                </table>
                <!--Fim da tabela-->
            </div>

            <!--Essa parte é do footer, onde contém por quem é desenvolvido, a logo e o email-->
                <?php    require_once ('model/footer.php'); ?>
    </main>

        <!--Esses scripts são do locaweb NAO APAGUE-->
    <script src="locaweb/jquery.js" type="text/javascript"></script>
    <script src="locaweb/example.js" type="text/javascript"></script>
    <script src="locaweb/localstyle.js" type="text/javascript"></script>
    <script src="locaweb/highcharts.js" type="text/javascript"></script>
    <script src="locaweb/panel-charts.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(window).on('load', function() {
                locastyle.browserUnsupportedBar.init();
            });
        </script>

    </body>
</html>
