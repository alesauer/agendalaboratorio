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
    
    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link href='css/personalizado.css' rel='stylesheet' />
    <script src='javascript/moment.min.js'></script>
    <script src='javascript/jquery.min.js'></script>
    <script src='javascript/fullcalendar.min.js'></script>
    <script src='locale/pt-br.js'></script>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/agendar-data.css">
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
    <!--Aquele é carregado o calendário-->
  <script src="javascript/carrega-calendario.js"></script>
  <!-- Aqui inicia o conteúdo da pagina -->
<main class="ls-main ">
  <div class="container-fluid" id="calendar"> 
  	<!--Feito por Sander :D-->

  </div>

<!--Essa parte é do footer, onde contém por quem é desenvolvido, a logo e o email-->
                <?php    require_once ('model/footer.php'); ?>
</main>

<!--Esses scripts são do locaweb NAO APAGUE-->
  
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
