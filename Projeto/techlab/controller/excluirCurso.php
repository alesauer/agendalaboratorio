<?php
// Adiciona o arquivo de verificação
require_once('../adminphp/verificausuario.php');
verificaLogin();
// Adiciona o arquivo de conexão
require_once('../adminphp/conecta.php');

// Recebe os parametros do formulário
// Verificação contra SQLINJECTION
$id = mysqli_real_escape_string($conexao, $_POST['ID']);


//QUERY que será executada no bando de dados 
$query = "DELETE FROM CURSO WHERE ID = '$id'";

// EXECUTA a QUERY de delete.
$select = mysqli_query($conexao, $query);
    if ($select) {
        // Se deletou , redireciona com mensagem de sucesso.
        $_SESSION['msg'] = "MSG06";
        header('Location: ../cursos.php');
        die();
    }
?>