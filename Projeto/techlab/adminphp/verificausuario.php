<?php


// CRIANDO TEMPO DE CACHE
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

session_cache_expire(10);
$cache_expire = session_cache_expire();

session_start();


//Função que verifica se o login está ativo, caso não estejá redireciona para o INDEX
function verificaLogin(){
    if(!(verificaLoginAtivo())){
        header('Location: index.php');
        die();
    }     
}


function verificaNivel(){
if($_SESSION['PERFIL'] != 1){
    header('Location: inicial.php');
}
}


//Função que verifica se o login está ativo
function verificaLoginAtivo(){
    if($_SESSION['LOGIN'] == true){
        return $_SESSION['LOGIN'];    
    }else{
        return false;
    }
}


//Função que retorna o nome do usuario logado
function nomeUsuarioLogado(){
    return $_SESSION['NOME'];
}


//Função que retorna o id do usuario logado
function idUsuarioLogado(){
    return $_SESSION['ID'];
}


//função que retorna se o usuário tem ou não previlégio de reservar
function podeReservar(){
   if($_SESSION['RESERVAR'] ==1){
       return true;
   } else {
   return false;    
   }
}

// Adiciona o email e login a sessão
function logaUsuario($email){
   $_SESSION['EMAIL']= $email;
   $_SESSION['LOGIN']= true;

 }
 
 
 //Cria sessão com os dados basicos 
 function criaSessao($id, $nome , $email,$reservar,$perfil){
  $_SESSION['ID']= $id;
  $_SESSION['NOME']= $nome;
  $_SESSION['USUARIO']= $email;
  $_SESSION['RESERVAR']= $reservar; 
  $_SESSION['PERFIL']= $perfil;
  $_SESSION['msg']= "";
  $_SESSION['LOGIN']= true;
 }
 
 
 //Destroi a sessão ou sejá logout.
 function logout(){
     session_start();
     session_destroy();
     header('Location: ../index.php');
     die();
 }

 
  //Cria sessão com os dados basicos 
 function verificaAdm(){
if($_SESSION['PERFIL'] > 1){
     logout();
     die();
}
 }