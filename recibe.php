<?php
$nombre = $_GET["nombre"];
$ciudad = $_GET["ciudad"];
$estado = $_GET["estado"];
$pais = $_GET["pais"];
$codigoPostal = $_GET["codigoPostal"];
$correo = $_GET["correo"];
$atencion = $_GET["atencion"];
$textMessage = $_GET["textMessage"];

$headers = "From: MaBaker <no-reply@mabaker.com>";
	$headers .= "\r\nContent-type: text/html; charset=iso-8859-1\r\n";
	$fecha = date("d-M-y");
	$message .= "
		<br>
		$fecha <br><br>
		Nombre:        	$nombre <br>
		Ciudad:			$ciudad <br>
		Estado:	       	$estado <br>
		Pais:	       	$pais <br>
		CodigoPostal:	$codigoPostal <br>
		Correo:	       	$correo <br>
		Atencion:		$atencion <br>
		Mensaje:       	$textMessage <br>
    ";
	//ini_set("SMTP", "relay-hosting.secureserver.net");

//  ejecutando el script del mail, solo sirve para PHP, y este es el orden:	mail($email, $subject, $message, $headers);
	mail("prueba@gmail.com", "Formulario de Contacto", $message, $headers);


?>
<script>
	window.onload = function(){
		window.location.replace('index.php');
	}
</script>