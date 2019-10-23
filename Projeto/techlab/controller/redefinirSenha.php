<?php

session_start();


require_once('../adminphp/conecta.php');
// Verificação contra SQLINJECTION
$novaSenha = mysqli_real_escape_string($conexao, $_POST['novasenha']);
$confirmaSenha = mysqli_real_escape_string($conexao, $_POST['confirmasenha']);
$id = mysqli_real_escape_string($conexao, $_POST['id']);
$token = mysqli_real_escape_string($conexao, $_POST['token']);

if ($novaSenha != $confirmaSenha) {
    $_SESSION['msg'] = "MSG14";
    header('Location: ../redefinir.php?token=3caaf6f6407bb98476dcdf844e1c60ef&id=1');
    die();
} else if (strlen($novaSenha) < 4) {
    $_SESSION['msg'] = "MSG13";
    header('Location: ../redefinir.php?token=3caaf6f6407bb98476dcdf844e1c60ef&id=1');
    die();
}

$query = "SELECT * FROM USUARIO WHERE ID='$id' and TOKEN= '$token'";
$select = mysqli_query($conexao, $query);

// Envia a conexão e a query para execução


//Caso sejá 1 ele encontrou o usuario e token validos
if (mysqli_num_rows($select) == 1) {
    $queryUpdate = "UPDATE USUARIO SET SENHA = md5('{$novaSenha}') , TOKEN ='' WHERE ID = $id  and TOKEN = '$token'";
    mysqli_query($conexao, $queryUpdate);
    $_SESSION['msg'] = "MSG16";
    header('Location: ../index.php');
    exit();
} else {
    $_SESSION['msg'] = "MSG23";
    header('Location: ../redefinir.php');
    exit;
}
?>