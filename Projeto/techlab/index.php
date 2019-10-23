<?php
require_once ('./adminphp/verificausuario.php');
?>
<html class="ls-theme-gray  ls-browser-chrome ls-window-xs ls-screen-xs">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Tela de Login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
        <link type="stylesheet" href="css/login.css">
    </head>
    <body>

        <div class="ls-login-parent">
            <div class="ls-login-inner">
                <div class="ls-login-container">
<?php
if ((isset($_SESSION['msg']))) {
    require_once('./mensagem.php');
}
?>
                    <div class="ls-login-box">
                        <h1 class="ls-login-logo"><img title="Logo login" src="img/logo-login.jpeg"></h1>
                        <form role="form" method="POST" class="ls-form ls-login-form" action="controller/login.php">
                            <fieldset>

                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Usuário</b>
                                    <input name="login" class="ls-login-bg-user ls-field-lg" type="text" placeholder="Usuário" required="" autofocus="">
                                </label>

                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Senha</b>
                                    <div class="ls-prefix-group ls-field-lg">
                                        <input name="senha" id="password_field" class="ls-login-bg-password" type="password" placeholder="Senha" required="">
                                        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href=""></a>
                                    </div>
                                </label>

                                <p><a class="ls-login-forgot" href="esqueci.php">Esqueci minha senha</a></p>

                                <input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">


                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>

            <script src="locaweb/jquery.js" type="text/javascript">
            </script><script src="locaweb/localweb.js" type="text/javascript"></script>

        </div>

    </body></html>
<?php
if ((isset($_SESSION['msg']))) {
    session_destroy();
}
?>