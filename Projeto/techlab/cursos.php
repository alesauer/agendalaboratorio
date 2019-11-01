<?php
// Adiciona o arquivo de conexão
require_once ('./adminphp/conecta.php');

// Adiciona o arquivo de controle que ajudará a listar os dados
require_once ('./controller/controllercurso.php');
require_once ('./adminphp/verificausuario.php');
verificaLogin();
verificaNivel();
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
        <link rel="stylesheet" href="css/cursos.css">

    <script>
        $(document).ready(function(){
          $("#busca").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tabela_curso tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
</script>
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
        <!-- chama o arquivo menu.php para impressão do menu -->
        <?php require_once('./model/menu.php'); ?>


        <!-- Aqui inicia o conteúdo da pagina -->
        <main class="ls-main ">
            <?php
            // verifica se existe alguma mensagem pra ser enviada para o usuário
            if ((isset($_SESSION['msg']))) {
                require_once('./mensagem.php');
            }
            ?>
            <div class="container-fluid"> 

                <h2 class="sub-titulo">Cursos</h2>

                <!-- Botões de Buscar \ Cancelar \ Salvar -->

                <button type="button" class="ls-btn-dark ls-ico-close" style="margin: 3px;">Cancelar</button>
                <button data-ls-module="modal" data-target="#modalsmall" style="margin: 3px" class="ls-btn-dark ls-ico-plus" data-append-to="body">Novo</button>

                <div class="ls-modal" id="modalsmall">
                    <div class="ls-modal-large">
                        <div class="ls-modal-header">
                            <button data-dismiss="modal">&times;</button>
                            <h4 class="ls-modal-title">Novo Curso</h4>
                        </div>
                        <!--MODAL QUE ADICONA UM NOVO CURSO -->
                        <div class="ls-modal-body">
                            <form action='controller/adicionaCurso.php'  method='post' class='ls-form-inline row' >
                                <label class="ls-label col-md-10 ls-form-inline row" >
                                    <b class="ls-label-text">Curso: </b>
                                    <input type="text"  name="DESC" placeholder="" required >
                                </label>
                                <label class="ls-label col-md-4 col-xs-12" id="filtrar">
                                    <b class="ls-label-text">Tipo de curso:</b>
                                    <div class="ls-custom-select">
                                        <!--                  FUNÇÃO QUE LISTA TIPOS DE CURSO NO LISTBOX-->
                                        <select name="addlistaCurso" class="ls-select" required>
                                            <!-- Adiciona as opções do banco de dados na lista -->
                                            <?php listaTipoCurso(); ?>
                                        </select>
                                    </div>
                                </label>
                                <label class="ls-label col-md-4 col-xs-12" id="filtrar">  
                                </label>  
                                <div class="ls-modal-footer">
                                    <button class="ls-btn-dark ls-ico-close" style="margin: 3px" data-dismiss="modal">Cancelar</button>
                                    <button type="submit ls-ico-checkmark" class="ls-btn-dark" style="margin: 3px;">Salvar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <button type="button" class="ls-btn-dark ls-ico-search" style="margin: 3px;">Buscar </button>
                <!--<button data-ls-module="modal"  class="ls-btn-dark ls-ico-plus" style="margin: 3px;" data-content="" data-title="Novo Curso" data-class="ls-btn-danger" data-save="Salvar" data-close="Fechar" class="ls-btn-primary"> Novo</button> -->
                <! -- Campos Pesquisar / filtrar por -- >

                <form action="" class="ls-form ls-form-horizontal row" id="formulario-01">
                    <fieldset>
                        <label class="ls-label col-md-5 col-xs-12" id="pesquisar">
                            <b class="ls-label-text">Pesquisar:</b>
                            <input type="text" id="txtBusca" name="txtBusca" placeholder="Informe o que deseja pesquisar" class="ls-field" required>
                        </label>

                        <label class="ls-label col-md-4 col-xs-12" id="filtrar">
                            <b class="ls-label-text">Filtrar por:</b>
                            <div class="ls-custom-select">
                                <select name="listaCurso" class="ls-select">
                                    <!-- Adiciona as opções do banco de dados na lista -->
                                    <option>Selecione o filtro</option>
                                    <?php listaTipoCurso(); ?>
                                </select>
                            </div>
                        </label>

                    </fieldset>
                </form>        
                <! -- Configuração da TABELA -- >
                <div class="tamanhoLista">
                    <table id="listaCursos" class="ls-table ls-table-striped">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Curso</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php listaCurso(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Essa parte é do footer, onde contém por quem é desenvolvido, a logo e o email-->
            <!-- chama o arquivo footer.php para impressão do foooter -->
            <?php require_once('model\footer.php'); ?>
        </main>

        <!--Esses scripts são do locaweb NAO APAGUE-->
        <script src="locaweb/jquery.js" type="text/javascript"></script>
        <script src="locaweb/example.js" type="text/javascript"></script>
        <script src="locaweb/localstyle.js" type="text/javascript"></script>
        <script src="locaweb/highcharts.js" type="text/javascript"></script>
        <script src="locaweb/panel-charts.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="javascript/fixedHeader.js"></script>
        
        <script defer>
            $("#listaCursos").fixedHeader(300);
        </script>
        <script type="text/javascript">
            $(window).on('load', function () {
                locastyle.browserUnsupportedBar.init();
            });


        </script>

        
        
                <script type="text/javascript">
    
                document.getElementById("txtBusca").addEventListener("keyup",function(){
                    var busca = document.getElementById("txtBusca").value.toLowerCase();
                    
                    for(var i = 0; i < tbody.childNodes.length;i++){
                        var achou = false;
                        var tr = tbody.childNodes[i];
                        var td = tr.childNodes;
                        
                        for(var j = 0; j <td.length;j++){
                            var value = td[j].childNodes[0].nodeValue.toLowerCase();
                            if(value.indexOf(busca)>=0){
                                achou = true;
                            }
                        }
                        if(achou){
                                tr.style.display = "table-row";
                        }else{
                            tr.style.display = "none";
                        }
                }
                    
                });


        </script>
        
        
    </body>
</html>
