<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nome     = $_POST['nome'];
$email    = trim($_POST['email']);
$emaildestinatario = 'adrianomarques.info@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$mensagem          = $_POST['mensagem'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Formulário de contato VisionDev Studio</P>
<p><b>Nome:</b> '.$nome.' <br>
<p><b>E-Mail:</b> '.$email.' <br>
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $mensagemHTML, $headers); 
 
 if($envio)
echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada

?>
