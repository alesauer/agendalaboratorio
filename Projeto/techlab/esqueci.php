<?php require_once('./adminphp/verificausuario.php'); ?>
<!DOCTYPE html>
<html class="ls-theme-gray">

    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Esqueci minha senha</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/esqueci.css">
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
                    <div id="alerta-email" class="ls-alert-danger"></div>

                    <div id="corpo" class="ls-login-box">
                        <h1 class="ls-login-logo">Esqueci minha senha</h1>
                        <br>
                        <p id="texto">Para redefinir sua senha, informe o CPF e o e-mail cadastrado na sua conta e lhe enviaremos um
                            link com as instruções.</p>
                        <br>

                        <form role="form" name="senha" class="ls-login-form" method="POST"action="controller/esqueciSenha.php">
                            <fieldset>

                                <label class="ls-label col-md-16">
                                    <b class="ls-label-text">CPF:</b>
                                    <input type="text" name="cpf" id="cpf" class="ls-mask-cpf" placeholder="000.000.000-00" required>
                                    <span id="errocpf" class="ls-sm-space"></span>
                                </label>

                                <label class="ls-label col-md-16">
                                    <b class="ls-label-text">E-mail:</b>
                                    <input type="text" name="email" placeholder="Digite seu email" maxlength="60" size="65" required>

                                </label>

                                <br>

                                <input onclick="validacaoEmail(senha.email, senha.cpf)" id="botao" type="submit" value="Redefinir"
                                       class="ls-btn-primary ls-btn-block ls-btn-lg">

                                <p class="ls-txt-center ls-login-signup"> <a href="index.php">Cancelar</a></p>

                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="locaweb/jquery-2.1.0.min.js" type="text/javascript"></script>
        <script src="locaweb/locastyle.js" type="text/javascript"></script>
        <script src="javascript/esqueci.js"></script>
        <script>
                  setTimeout(function () {
                      var msg = document.getElementById("alerta-msg");
                      msg.parentNode.removeChild(msg);
                  }, 5000);
        </script>
    </body>
</html>

