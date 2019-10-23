
<?php 
require_once('../adminphp/conecta.php');


session_start();


// Verificação contra SQLINJECTION
$cpf =  mysqli_real_escape_string($conexao , $_POST['cpf']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);

$cpf = str_replace(".", "", $cpf);
$cpf = str_replace("-", "", $cpf);


$query = "SELECT * FROM USUARIO where CPF='$cpf' and EMAIL= '$email'";
// Envia a conexão e a query para execução

$select =  mysqli_query($conexao,$query);

$dados = $select->fetch_assoc();


//Caso sejá 1 ele digitou senha correta para o usuário buscado
if(mysqli_num_rows($select) == 1){
  $id = $dados["ID"];
  
  //CRIA TOKEN COM DATA ATUAL
  $token = md5(date('d/m/Y \à\s H:i:s'));

  $query = "UPDATE USUARIO SET TOKEN ='$token' where ID ='$id'";
  // Envia a conexão e a query para execução
  
  mysqli_query($conexao,$query);

  $query = "SELECT * FROM USUARIO WHERE ID ='$id' and TOKEN ='$token'";

  $select =  mysqli_query($conexao,$query);
  
  $select = $select->fetch_assoc();
  

$Nome		= $select['NOME'];
$Email		= $select['EMAIL'];
$Emailpara	= $select['EMAIL'];
//$Mensagem	= " Oi, ".$select['nome'].", vamos te ajudar com sua senha."
//        . " É só clicar no link abaixo e cadastrar uma nova senha de acesso."
//        . " Ou se preferir copie e cole este link no seu navegador. "
//        . "http://pitagorasraja.net.br/techlab/redefinir.php?token=$token&id=$id Caso não tenha solicitado redefinição de senha, gentileza desconsiderar esta mensagem."
//        . " Esta é uma mensagem automática, favor não responder a este e-mail.";


$Mensagem	="<h4 style='text-align: center;'><strong>Oi, ".$select['NOME']."</strong></h4>
<p><strong></strong></p>
<p style='text-align: center;'>vamos te ajudar com sua senha. <br />  &Eacute; s&oacute; clicar no link abaixo e cadastrar uma nova senha de acesso.<br />   Ou se preferir copie e cole este link no seu navegador. </p>
<h3 style='text-align: center;'><img src='http://pitagorasraja.net.br/techlab/img/rec.png' alt='rec' width='187' height='140' /><br /> <span style='color: #0000ff;'> http://pitagorasraja.net.br/techlab/redefinir.php?token=$token&amp;id=$id </span></h3>
<p style='text-align: center;'></p>
<p style='text-align: center;'>Caso n&atilde;o tenha solicitado redefini&ccedil;&atilde;o de senha, gentileza desconsiderar esta mensagem.<br />  Esta &eacute; uma mensagem autom&aacute;tica, favor n&atilde;o responder a este e-mail.</p>";

enviaemail($Nome,$Emailpara,$Mensagem, $Email);
$_SESSION['msg'] = "MSG19";
header('Location: ../index.php');
exit();
}else{
  $_SESSION['msg'] = "MSG24";
  header('Location: ../esqueci.php');
  exit();
}

function enviaemail ($Nome,$Emailpara,$Mensagem, $Email)
{
// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "$Mensagem\n";

require_once("../phpmailer/class.phpmailer.php");


function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->CharSet="UTF-8";
	$mail->SMTPDebug = 1;		
	$mail->SMTPAuth = true;		
	$mail->SMTPSecure = 'ssl';	
	$mail->Host = 'a2plcpnl0790.prod.iad2.secureserver.net';	
	$mail->Port = '465';  		
	$mail->Username = 'techlab@pitagorasraja.net.br';
	$mail->Password = 'GxgLTr2019';
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
        $mail->IsHTML(true);
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}


// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
// o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer($Emailpara, 'techlab@pitagorasraja.net.br', 'Recuperar senha - Sistema de agendamento laboratório Pitágoras', 'Recuperar senha', $Vai)) {

}
if (!empty($error)) echo $error;
}//end function


?>

