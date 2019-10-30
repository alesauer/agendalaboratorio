<?php 
define('HOST','basemapeamento.mysql.dbaas.com.br');
define('USUARIO','basemapeamento');
define('SENHA','A2000pwd');
define('DB','basemapeamento');



//Cria conexão com banco de dados
$conexao = mysqli_connect(HOST, USUARIO ,SENHA , DB) or die ('Sem conexão');

//$conexao = mysqli_connect("basemapeamento.mysql.dbaas.com.br", "basemapeamento", "A2000pwd", "basemapeamento");


//Função que retorna conexão com banco de dados
function buscaconexao(){
$conexao = mysqli_connect(HOST, USUARIO ,SENHA , DB) or die ('Sem conexão');

return $conexao;
}