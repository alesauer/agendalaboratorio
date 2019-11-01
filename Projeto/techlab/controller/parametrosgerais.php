<?php
require_once('../adminphp/verificausuario.php'); 
verificaLogin();
 require_once('../adminphp/conecta.php');
 
//Antecedência mínima para agendamento
$AG_ADIANT_MIN = mysqli_real_escape_string($conexao, $_POST['AG_ADIANT_MIN']);
//Antecedência máxima para agendamento
$AG_ADIANT_MAX = mysqli_real_escape_string($conexao, $_POST['AG_ADIANT_MAX']);
//Máximo de agendamentos por diao
$AG_MAX_DIA = mysqli_real_escape_string($conexao, $_POST['AG_MAX_DIA']);
//Máximo de agendamentos Simultâneos
$AG_MAX_SIMULT = mysqli_real_escape_string($conexao, $_POST['AG_MAX_SIMULT']);

//Verifica se existe algum negativo ou menor que 1.
if($AG_ADIANT_MIN < 1 || $AG_ADIANT_MAX < 1 ||  $AG_MAX_DIA < 1 || $AG_MAX_SIMULT < 1){
   header('Location: ../parametros-gerais.php');
}

if(isset($_POST['AG_APROVA'])){
//Necessário aprovação de Agendamentos?
$AG_APROVA = "S";    
}else{
$AG_APROVA = "N";
}

$query = "UPDATE PARAM_GERAIS SET `AG_ADIANT_MIN` = $AG_ADIANT_MIN,`AG_ADIANT_MAX` = $AG_ADIANT_MAX,`AG_MAX_DIA` = $AG_MAX_DIA,`AG_MAX_SIMULT` = $AG_MAX_SIMULT ,`AG_APROVA` = '$AG_APROVA' WHERE `ID` = 1";

$select = mysqli_query($conexao,$query);

if ($select) {
   // session_start();
    $_SESSION['msg'] = "MSG04";
    header('Location: ../parametros-gerais.php');
    die();
}

 ?>