<?php

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

session_cache_expire(10);
$cache_expire = session_cache_expire();

session_start();

function verificaLogin(){
    if(!(verificaLoginAtivo())){
        header('Location: ../index.php');
        die();
    }     
}

function verificaLoginAtivo(){
    return isset($_SESSION['LOGIN']);
}

function nomeUsuarioLogado(){
    return $_SESSION['NOME'];
}

function idUsuarioLogado(){
    return $_SESSION['ID'];
}

function podeReservar(){
   if($_SESSION['RESERVAR'] ==1){
       return true;
   } else {
   return false;    
   }
}

function logaUsuario($email){
   $_SESSION['EMAIL']= $email;
   $_SESSION['LOGIN']= true;

 }
 
 function criaSessao($id, $nome , $email,$reservar,$perfil){
  $_SESSION['ID']= $id;
  $_SESSION['NOME']= $nome;
  $_SESSION['USUARIO']= $email;
  $_SESSION['RESERVAR']= $reservar; 
  $_SESSION['PERFIL']= $perfil;
 }
 
 function logout(){
     session_destroy();
     session_start();
     header('Location: ../index.php');
     die();
 }
