<?php

require_once('../adminphp/verificausuario.php');
verificaLogin();
require_once('../adminphp/conecta.php');


$id = mysqli_real_escape_string($conexao, $_POST['ID']);
$nome = mysqli_real_escape_string($conexao, $_POST['DESC']);
$listaCurso = mysqli_real_escape_string($conexao, $_POST['listaCursoModal']);

echo $id;
echo $nome;
echo $listaCurso;


$query = "UPDATE CURSO SET CURSO.DESC = '$nome', TIPO_CURSO_ID  = '$listaCurso' where ID = '$id'";

$select = mysqli_query($conexao, $query);

if ($select) {
    $_SESSION['msg'] = "MSG04";
    header('Location: ../cursos.php');
    die();
}
?>