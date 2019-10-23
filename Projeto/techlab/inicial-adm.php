<?php require_once('./adminphp/verificausuario.php'); 
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
  <meta http-equiv="refresh" content="60">
   
    <link rel="stylesheet" type="text/css" href="front/reset.css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-painel1.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-painel1.png">
    <meta name="apple-mobile-web-app-title" content="Painel 1">
    <script src="locaweb/mediaqueries-ie.js" type="text/javascript"></script>
    <script src="locaweb/html5shiv.js" type="text/javascript"></script>
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/inicial-adm.css">
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
  	
      <h2 class="sub-titulo"> Olá , <?php echo nomeUsuarioLogado(); ?></h2>
      
      <h3 class="h3">Agendamentos Pendentes</h3> 
    <table class="ls-table ls-table-striped" style="margin-top: 20px"  >
  <thead>
    <tr>
      <th>Usuário</th>
      <th class="hidden-xs" >Perfil</th>
      <th class="hidden-xs">Tipo</th>
      <th>Laboratório</th>
      <th>Data</th>
      <th>Período</th>
      <th colspan="2" style="text-align: center;">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> Suzana O.</td>
      <td class="hidden-xs">Professor</td>
      <td class="hidden-xs ls-ico-edit-admin">Desenho</td>
      <td>Laboratório desenho 1</td>
      <td>04/09/2019</td>
      <td>Manha-Integral</td>
      <td><a href="#" class="ls-btn-aprovar ls-ico-checkmark" style="margin: 3px;">Aprovar</a> </td>
      <td><button type="button" class="ls-btn-primary-danger ls-ico-close" style="margin: 3px;">Recusar</button></td>
    </tr>
      <tr>
      <td> Paulo da silva</td>
      <td class="hidden-xs">Professor</td>
      <td class="hidden-xs ls-ico-screen">Informática</td>
      <td>Laboratório Avançado</td>
      <td>0/09/2019</td>
      <td>Manha-Integral</td>
      <td><a href="#" class="ls-btn-aprovar ls-ico-checkmark" style="margin: 3px;">Aprovar</a> </td>
      <td><button type="button" class="ls-btn-primary-danger ls-ico-close" style="margin: 3px;">Recusar</button></td>
    </tr>
      <tr>
      <td> Julio Cézar</td>
      <td class="hidden-xs">Coordenador</td>
      <td class="hidden-xs ls-ico-screen">Informática</td>
      <td>Laboratório I</td>
      <td>04/09/2019</td>
      <td>Noite - 19:00h ás 22:00h</td>
      
      <td><a href="#" class="ls-btn-aprovar ls-ico-checkmark" style="margin: 3px; ">Aprovar</a> </td>
      <td><button type="button" class="ls-btn-primary-danger ls-ico-close" style="margin: 3px; ">Recusar</button></td>
    </tr>
  
    
      <tr>
      <td> Alexandre Sauer</td>
      <td class="hidden-xs">Professor</td>
      <td class="hidden-xs ls-ico-screen">Informática</td>
      <td>Laboratório III</td>
      <td>04/09/2019</td>
      <td>Noite - 19:00h ás 20:45h</td>
      
      <td><a href="#" class="ls-btn-aprovar ls-ico-checkmark" >Aprovar</a> </td>
      <td><a type="button" class="ls-btn-primary-danger ls-ico-close">Recusar</a></td>
    </tr>


  </tbody>
</table>
      
  </div>

<!--Essa parte é do footer, onde contém por quem é desenvolvido, a logo e o email-->
<?php require_once('model\footer.php'); ?>
</main>

<!--Esses scripts são do locaweb NAO APAGUE-->
  <script src="front/locaweb/jquery.js" type="text/javascript"></script>
  <script src="front/locaweb/example.js" type="text/javascript"></script>
  <script src="front/locaweb/localstyle.js" type="text/javascript"></script>
  <script src="front/locaweb/highcharts.js" type="text/javascript"></script>
  <script src="front/locaweb/panel-charts.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(window).on('load', function() {
      locastyle.browserUnsupportedBar.init();
    });
  </script>

</body>
</html>
