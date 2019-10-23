<?php

/*
$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem
*/
$select = $select->fetch_assoc(); 

$_POST['nome']= $select["nome"];
$_POST['email'] = "braianluz@gmail.com";
$_POST['mensagem'] = " teste";
$Nome		= $_POST['nome'];
$Email		= $_POST['email'];
$Emailpara	= "braianluz@gmail.com";
$Mensagem	= $_POST['mensagem'];


enviaemail($Nome,$Emailpara,$Mensagem, $Email);




function enviaemail ($Nome,$Emailpara,$Mensagem, $Email)
{
// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Nome: $Nome\n\nE-mail: $Email\n\n\nMensagem: $Mensagem\n";

require_once("../phpmailer/class.phpmailer.php");

//define('GUSER', 'alesauer@gmail.com');	// <-- Insira aqui o seu GMail
//define('GPWD', 'GxgLTr201@');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->CharSet="UTF-8";
	$mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'a2plcpnl0790.prod.iad2.secureserver.net';	// SMTP utilizado
	$mail->Port = '465';  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = 'techlab@pitagorasraja.net.br';
	$mail->Password = 'GxgLTr2019';
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
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

 if (smtpmailer($Emailpara, 'techlab@pitagorasraja.net.br', 'Solicitação Grupo de Estudos', 'Grupo de Estudos', $Vai)) {
    echo '<div id="msg" class="container alert alert-success" role="alert">Solicitação enviada com sucesso !</div>' ;
    echo '<a id="voltar" class="container btn btn-primary" href="participar.html" role="button">Voltar</a>';
	//Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;

}//end function


?>
