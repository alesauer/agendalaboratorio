<?php ?>    
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
        <link rel="icon" sizes="192x192" href="locawebstyle/assets/images/ico-painel1.png">
        <link rel="apple-touch-icon" href="locawebstyle/assets/images/ico-painel1.png">
        <meta name="apple-mobile-web-app-title" content="Painel 1">
        <script src="locaweb/mediaqueries-ie.js" type="text/javascript"></script>
        <script src="locaweb/html5shiv.js" type="text/javascript"></script>
        <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/alterar-senha.css">
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
<?php
if ((isset($_SESSION['msg']))) {
    require_once('./mensagem.php');
}
?>
            <div class="container-fluid"> 

                <!--Feito por Tainá :D-->


                <!--Aqui vem o sub-titulo e os botões-->
                <h2 class="sub-titulo">Alterar Senha</h2> 
                <!--A imagem de perfil (Icone)e o nome do usuário-->
                <img src="img/logo-usuario.png" class="foto-usuario"><br><a class="nome-usuario">Usuário</a>
                <form action="controller/altera-senha.php" method="POST" class="ls-form ls-form row recuoform" id="senha">

                    <fieldset>           
                        <a href="minha-conta.php"> <button type="button" class="ls-btn-dark ls-ico-close">Cancelar</button></a>
                        <button type="submit" class="ls-btn-dark ls-ico-checkmark">Salvar</button>
                    </fieldset> 

                    <!--Aqui começa o formulário de alterar senha do usuario-->

                    <fieldset>
                        <label class="ls-label col-md-6">
                            <b class="ls-label-text">Senha Atual:</b>
                            <div class="ls-prefix-group">
                                <input  type="password" maxlength="20" id="password_field1a" name="senhaatual">
                                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field1a" href="#">
                                </a>
                            </div>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="ls-label col-md-6">
                            <b class="ls-label-text">Nova Senha:</b>
                            <div class="ls-prefix-group">
                                <input type="password" maxlength="20" id="password_field2a" name="novasenha">
                                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field2a" href="#">
                                </a>
                            </div>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label class="ls-label col-md-6">
                            <b class="ls-label-text">Confirmar Nova Senha:</b>
                            <div class="ls-prefix-group">
                                <input type="password" maxlength="20" id="password_field3a" name="confirmanovasenha">
                                <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field3a" href="#">
                                </a>
                            </div>
                        </label>
                    </fieldset>
                </form>
                <!--Aqui finaliza o formulario-->
            </div>


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

    </body>
</html>
