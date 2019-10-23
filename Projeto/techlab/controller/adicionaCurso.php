<?php
require_once('../adminphp/verificausuario.php'); 
verificaLogin();
require_once('../adminphp/conecta.php');

$nome = mysqli_real_escape_string($conexao,$_POST['DESC']);
$listaCurso = mysqli_real_escape_string($conexao,$_POST['addlistaCurso']);


$query = "INSERT INTO CURSO (CURSO.DESC,TIPO_CURSO_ID)VALUES('".$nome."' , ".$listaCurso.");";

$select =  mysqli_query($conexao,$query);

if($select){
    $_SESSION['msg'] = "MSG04";
    header('Location: ../cursos.php');
    die();
}

?>