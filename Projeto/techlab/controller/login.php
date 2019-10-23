<?php 
require_once('../adminphp/conecta.php');
require_once('../adminphp/verificausuario.php'); 


// Verificando novamente se usuário ou senha estão vazios
if(empty($_POST['login']) || empty($_POST['senha'])){
  header('Location: ../index.html');
}

// Verificação contra SQLINJECTION
$usuario =  mysqli_real_escape_string($conexao , $_POST['login']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);



$query = "select * from USUARIO where EMAIL ='{$usuario}' and SENHA = md5('{$senha}')";


// Envia a conexão e a query para execução
$select =  mysqli_query($conexao,$query);

$nome = $select->fetch_assoc();

$retorno = mysqli_num_rows($select);



//Caso sejá 1 ele digitou senha e usuário corretos
if($retorno == 1){
    logaUsuario($email);
    criaSessao($nome["ID"],$nome["NOME"],$nome["EMAIL"],$nome["RESERVA"],$nome["PERFIL_ID"]);
  if($nome["reservar"] == 1){
  header('Location: ../inicial-adm.php');

  }else{
  header('Location: ../agendamentos.php');

  }
  exit();
}else{

  $_SESSION['msg'] = "MSG02";
  header('Location: ../index.php');
  exit();
}



?>
