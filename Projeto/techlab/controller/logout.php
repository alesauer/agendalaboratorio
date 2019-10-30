<?php 
require_once ('../adminphp/verificausuario.php');
// Adiciona o arquivo de verificação
// Chama a função logout, e redireciona para o index.php
logout();
header('Location: index.php');
die();