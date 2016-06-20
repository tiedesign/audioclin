<?php
	$email_remetente    = "contato@audioclinrs.com.br"; // deve ser um email do dominio
	$email_destinatario = "contato@audioclinrs.com.br"; // qualquer email pode receber os dados
 
	$nome = $_POST['contact_name'];
	$email = $_POST['contact_email'];
	$telefone = $_POST['contact_phone'];
	$mensagem = $_POST['contact_message'];
 
	$email_conteudo = "<b>Nome:</b> $nome \n"; 
	$email_conteudo .= "<b>Email:</b> $email \n"; 
	$email_conteudo .= "<b>Telefone:</b> $telefone \n";
	$email_conteudo .= "\n<b>Mensagem:</b> \n\n $mensagem \n";

	$email_headers = implode("\n",array ( "From: $email_remetente", "Reply-To: $email", "Subject: Contato via site de: $nome", "Return-Path:  $email", "MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=ISO-8859-1" ) );
 
	$assunto = "Contato via site de $nome";
	mail($email_destinatario, $assunto, nl2br($email_conteudo), $email_headers);
?>