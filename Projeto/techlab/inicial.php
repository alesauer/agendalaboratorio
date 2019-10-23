<?php
require_once('./adminphp/verificausuario.php');

verificaLogin();
?>



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
        <link rel="stylesheet" type="text/css" href="css/inicial.css">
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

                <h2 class="sub-titulo">Olá, <?php echo $_SESSION['NOME'] ?></h2> 

                <!-- MODAL DE AGENDAR LABORATÓRIO-->
                <button data-ls-module="modal" data-target="#myAwesomeModal" class="ls-btn-primary" id="botao-modal">Agendar Laboratório</button>

                <div class="ls-modal" id="myAwesomeModal">
                    <div class="ls-modal-box">
                        <div class="ls-modal-header">
                            <button data-dismiss="modal">&times;</button>
                            <h4 class="ls-modal-title">Agendar Laboratório</h4>
                        </div>
                        <div class="ls-modal-body" id="myModalBody">
                            <p>Escolha a melhor forma de você realizar o seu agendamento:
                                <br> Por data ou por Laboratório?</p>
                        </div>
                        <div class="ls-modal-footer">
                            <button class="ls-btn ls-float-right" data-dismiss="modal">Fechar</button>
                            <a href="agendar-data.php"><button type="submit" class="ls-btn-primary">Por Data</button></a>
                            <a href="agendar-laboratorio.php"><button type="submit" class="ls-btn-primary">Por Laboratório</button></a>
                        </div>
                    </div>
                </div>
                <!-- fim do modal -->
                <!-- Essa parte é da tabela que consta os agendamentos ativos do professor-->
                <h3 class="meus-agendamentos"> Meus Agendamentos</h3>

                <table class="ls-table ls-table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Laboratório</th>
                            <th>Sala</th>
                            <th>Andar</th>
                            <th>Cancelar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ls-ico-screen"><a href="" title="">Informática</a></td>
                            <td >Laboratório I</td>
                            <td >25</td>
                            <td >2º</td>
                            <td class="ls-ico-close"></td>
                        </tr>
                        <tr> 
                            <td class="ls-ico-edit-admin"><a href="" title="">Desenho</a></td>
                            <td >Laboratório Avançado II</td>
                            <td >7</td>
                            <td >11º</td>
                            <td class="ls-ico-close"></td>

                        </tr>
                        <tr>
                            <td class="ls-ico-screen"><a href="" title="">Informática</a></td>
                            <td >Laboratório II</td>
                            <td >30</td>
                            <td >8º</td>
                            <td class="ls-ico-close"></td>
                        </tr>
                        <tr>
                            <td class="ls-ico-cog"><a href="" title="">Engenharia</a></td>
                            <td >Laboratório Iniciante I</td>
                            <td >5</td>
                            <td >Sub-Solo II</td>
                            <td class="ls-ico-close"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Fim da tabela-->

            <!--Essa parte é do footer, onde contém por quem é desenvolvido, a logo e o email-->
<?php require_once ('model/footer.php'); ?>
        </main>

        <!--Esses scripts são do locaweb NAO APAGUE-->
        <script src="locaweb/jquery.js" type="text/javascript"></script>
        <script src="locaweb/example.js" type="text/javascript"></script>
        <script src="locaweb/localstyle.js" type="text/javascript"></script>
        <script src="locaweb/highcharts.js" type="text/javascript"></script>
        <script src="locaweb/panel-charts.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(window).on('load', function () {
                locastyle.browserUnsupportedBar.init();
            });

        </script>
        <script>
            setTimeout(function () {
                var msg = document.getElementById("alerta-msg");
                msg.parentNode.removeChild(msg);
            }, 5000);
        </script>

    </body>
</html>
