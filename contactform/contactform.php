<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];
$destinatario = 'ggonzani@gmail.com'; // en esta línea va el mail del destinatario.

if (!$_POST)
?>

<?php
else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["name"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["mesagge"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $message, $cuerpo, $headers);
    
    echo "<script type='text/javascript'>alert('Su mensaje ha sido enviado. Le responderemos a la brevedad');</script>";
echo "<script type='text/javascript'>window.location.href='http://google.com';</script>";
    
}
?>
