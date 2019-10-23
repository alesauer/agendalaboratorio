<?php 
define('HOST','basemapeamento.mysql.dbaas.com.br');
define('USUARIO','basemapeamento');
define('SENHA','A2000pwd');
define('DB','basemapeamento');




$conexao = mysqli_connect(HOST, USUARIO ,SENHA , DB) or die ('Sem conexão');

//$conexao = mysqli_connect("basemapeamento.mysql.dbaas.com.br", "basemapeamento", "A2000pwd", "basemapeamento");

function buscaconexao(){
$conexao = mysqli_connect(HOST, USUARIO ,SENHA , DB) or die ('Sem conexão');

return $conexao;
}