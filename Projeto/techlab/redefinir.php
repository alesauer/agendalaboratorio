<?php
session_start();

if ((!isset($_GET['id']) == true) and ( !isset($_GET['token']) == true)) {
    session_destroy();
    header('Location: index.php');
}

$id = $_GET['id'];
$token = $_GET['token'];
?>



<!DOCTYPE html>
<html class="ls-theme-gray">

    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Redefinir senha</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/redefinir.css">
    </head>

    <body
        class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">

        <div class="ls-login-parent">
            <div class="ls-login-inner">
                <div class="ls-login-container">
                    <?php require_once('mensagem.php'); ?>
                    <div id="alerta-senha" class="ls-alert-danger"></div>
                    <div id="corpo" class="ls-login-box">
                        <h1 class="ls-login-logo">Redefinir sua senha</h1>
                        <br>
                        <p id="texto">Preencha os campos abaixo:</p>
                        <br>

                        <form role="form" name="formsenha" class="ls-form ls-login-form" method="POST" action="controller/redefinirSenha.php">
                            <label class="ls-label">
                                <b class="ls-label-text">Nova senha:</b>
                                <div class="ls-prefix-group ls-field-lg">
                                    <input name="novasenha" id="password_field" class="ls-login-bg-password" type="password"
                                           placeholder="Nova senha" required>
                                    <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye"
                                       data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                                </div>
                            </label>
                            <br>
                            <label class="ls-label">
                                <b class="ls-label-text">Confirme sua Senha:</b>
                                <div class="ls-prefix-group ls-field-lg">
                                    <input name="confirmasenha" id="password_field1" class="ls-login-bg-password" type="password"
                                           placeholder="Confime sua senha" required>
                                    <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye"
                                       data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field1" href="#"></a>
                                </div>
                            </label>
                            <br>

                            <input  type="submit" onclick="return testasenha(formsenha.novasenha, formsenha.confirmasenha)" id="botao"
                                    value="Salvar" class="ls-btn-primary ls-btn-block ls-btn-lg">
                            <p class="ls-txt-center ls-login-signup"><a href="index.php">Cancelar</a></p>
                            <input type="hidden" name="id" value="<?php echo $id ?>" /> 
                            <input type="hidden" name="token" value="<?php echo $token ?>" /> 
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <script src="locaweb/jquery-2.1.0.min.js" type="text/javascript"></script>
        <script src="locaweb/locastyle.js" type="text/javascript"></script>
        <script src="javascript/redefinir.js" type="text/javascript"></script>
        <script>
                setTimeout(function () {
                    var msg = document.getElementById("alerta-msg");
                    msg.parentNode.removeChild(msg);
                }, 5000);
        </script>
    </body>

</html>