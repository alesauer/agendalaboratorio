<?php 
// Adiciona o arquivo de verificação
require_once('../adminphp/verificausuario.php'); 
verificaLogin();
session_start();
// Adiciona o arquivo de conexão
require_once('../adminphp/conecta.php');


// Recebe os parametros do formulário
// Verificação contra SQLINJECTION
$senhaAtual =  mysqli_real_escape_string($conexao , $_POST['senhaatual']);
$novaSenha = mysqli_real_escape_string($conexao,$_POST['novasenha']);
$confirmaNovaSenha = mysqli_real_escape_string($conexao,$_POST['confirmanovasenha']);

// Verifica se as senhas são iguais
if($novaSenha != $confirmaNovaSenha){
    // Se não, redireciona para pagina com a mensagem da erro.
  $_SESSION['msg'] = "MSG14";
  header('Location: ../alterar-senha.php');
  exit;

}else if(strlen($novaSenha) < 4 ){
    // Verifica se possui < de 4 caracteres se sim, redireciona para pagina com a mensagem da erro.
  $_SESSION['msg'] = "MSG13";
  header('Location: ../alterar-senha.php');
  exit;
}


//QUERY que será executada no bando de dados 
$query = "select * from USUARIO where ID ='{$_SESSION['ID']}' and SENHA = md5('{$senhaAtual}')";


//mysqli_query -> Envia a conexão e a query para execução
// $select -> variavel com resultado da query 
$select =  mysqli_query($conexao,$query);




//Caso sejá 1 ele digitou senha correta para o usuário que está logado
if(mysqli_num_rows($select) == 1){
  //QUERY que será executada no bando de dados para atualizar a senha
  $queryInsert = "UPDATE  USUARIO SET SENHA = md5('{$novaSenha}') WHERE ID = {$_SESSION['ID']}";
  $select =  mysqli_query($conexao,$queryInsert);
  //REDIRECIONA APOS ATUALIZAR SENHA
  $_SESSION['msg'] = "MSG16";
  header('Location: ../index.php');
  exit();
}else{
    //Caso não encontre um usuário 
  $_SESSION['msg'] = "MSG23";
  header('Location: ../alterar-senha.php');
  exit;
}



?>