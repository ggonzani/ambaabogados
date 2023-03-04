<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "este mensaje fue enviado por: ".$name."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";

$message .= "message: ".$_POST['mensaje']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'ggonzani@gmail.com';
$asunto = 'Consulta abogados laboralistas de mi web';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Su mensaje ha sido enviado. Le responderemos a la brevedad');</script>";
echo "<script type='text/javascript'>window.location.href='http://ambaabogados.com';</script>";

 ?>
