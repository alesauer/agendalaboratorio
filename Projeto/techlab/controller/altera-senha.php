<?php 
require_once('../adminphp/verificausuario.php'); 
verificaLogin();
session_start();
require_once('../adminphp/conecta.php');



// Verificação contra SQLINJECTION
$senhaAtual =  mysqli_real_escape_string($conexao , $_POST['senhaatual']);
$novaSenha = mysqli_real_escape_string($conexao,$_POST['novasenha']);
$confirmaNovaSenha = mysqli_real_escape_string($conexao,$_POST['confirmanovasenha']);


if($novaSenha != $confirmaNovaSenha){
  $_SESSION['msg'] = "MSG14";
  header('Location: ../alterar-senha.php');
  exit;

}else if(strlen($novaSenha) < 4 ){
  $_SESSION['msg'] = "MSG13";
  header('Location: ../alterar-senha.php');
  exit;
}



$query = "select * from USUARIO where ID ='{$_SESSION['ID']}' and SENHA = md5('{$senhaAtual}')";


// Envia a conexão e a query para execução
$select =  mysqli_query($conexao,$query);




//Caso sejá 1 ele digitou senha correta para o usuário que está logado
if(mysqli_num_rows($select) == 1){
  
  $queryInsert = "UPDATE  USUARIO SET SENHA = md5('{$novaSenha}') WHERE ID = {$_SESSION['ID']}";
  $select =  mysqli_query($conexao,$queryInsert);
  $_SESSION['msg'] = "MSG16";
  header('Location: ../index.php');
  exit();
}else{
  $_SESSION['msg'] = "MSG23";
  header('Location: ../alterar-senha.php');
  exit;
}



?>