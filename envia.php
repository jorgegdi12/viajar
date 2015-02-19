<?php
$remitente = $_POST['email'];
$destinatario = 'info@viajarpacanada.com'; // en esta línea va el mail del destinatario, puede ser una cuenta de hotmail, yahoo, gmail, etc
$asunto = 'Cliente'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre: " . $_POST["name"] . "\r \n"; 
    $cuerpo .= "Telefono fijo: " . $_POST["fijo"] . "\r \n";
	$cuerpo .= "Telefono celular: " . $_POST["celular"] . "\r \n";
	$cuerpo .= "Ciudad: " . $_POST["ciudad"] . "\r \n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r \n";
    $cuerpo .= "Servicio". $_POST["¨servicio"] . "\r \n";
	$cuerpo .= "Consulta: " . $_POST["message"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
