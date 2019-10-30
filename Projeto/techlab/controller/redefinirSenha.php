<?php

session_start();

// Adiciona o arquivo de conexão
require_once('../adminphp/conecta.php');

// Recebe os parametros do formulário
// Verificação contra SQLINJECTION
$novaSenha = mysqli_real_escape_string($conexao, $_POST['novasenha']);
$confirmaSenha = mysqli_real_escape_string($conexao, $_POST['confirmasenha']);
$id = mysqli_real_escape_string($conexao, base64_decode($_POST['id']));
$token = mysqli_real_escape_string($conexao, $_POST['token']);

if ($novaSenha != $confirmaSenha) {
        // Se não, redireciona para pagina com a mensagem da erro.
    $_SESSION['msg'] = "MSG14";
    header('Location: ../redefinir.php?token='.$token.'&id='.$id.'');
    die();
} else if (strlen($novaSenha) < 4) {
     // Verifica se possui < de 4 caracteres se sim, redireciona para pagina com a mensagem da erro.
    $_SESSION['msg'] = "MSG13";
    header('Location: ../redefinir.php?token='.$token.'&id='.$id.'');
    die();
}

//QUERY que será executada no bando de dados 
$query = "SELECT * FROM USUARIO WHERE ID='$id' and TOKEN= '$token'";
// Envia a conexão e a query para execução
$select = mysqli_query($conexao, $query);




//Caso sejá 1 ele encontrou o usuario e token validos
if (mysqli_num_rows($select) == 1) {
      //QUERY que será executada no bando de dados para atualizar a senha
    $queryUpdate = "UPDATE USUARIO SET SENHA = md5('{$novaSenha}') , TOKEN ='' WHERE ID = $id  and TOKEN = '$token'";
    mysqli_query($conexao, $queryUpdate);
    //REDIRECIONA APOS ATUALIZAR SENHA
    $_SESSION['msg'] = "MSG16";
    header('Location: ../index.php');
    exit();
} else {
    //Caso não encontre um usuário 
    $_SESSION['msg'] = "MSG23";
    header('Location: ../redefinir.php');
    exit;
}
?>