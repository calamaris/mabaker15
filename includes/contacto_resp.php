  <head>
  
  <!-- Script Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42510621-1', 'mabakerandchef.com');
  ga('send', 'pageview');
</script>
<!-- Fin Script Google Analytics -->
  
  
  <title>contacto</title>

<script language="JavaScript" type="text/JavaScript">

var pagina="http://www.mabakerandchef.com/index.php?Seccion=Contacto"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 5000);

</script>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 30px;
	color: #3366cc;
}
.Estilo2 {
	color: #3366cc;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #3366cc;
}
-->
</style>
</head>
<body>
<div id="contenedor">
<div id="contenido-index">
<div class="titulo-form" align="center">
<p class="Estilo1">!Tu Mensaje ha sido enviado correctamente!</p>
</div>
</div>
<div class="titulo-denominacion">
<div align="center" class="Estilo2 text-form"><strong>!Muchas
gracias&iexcl; Agradecemos tu mensaje. En la mayor brevedad ser&aacute;s
contactado.
 </strong></div>
</div>
<span class="Estilo2">
<?php 
include('Conexion.inc.php');
Conectar();
    date_default_timezone_set('Mexico/General');
	$sql = "Insert Into Visitas (Fecha, Hora, Nombre, Ciudad, Estado, Pais, CP, EMail, Comentario, TProveedor, OProveedor, Telefono) Values 
	        ('".date('Y-m-d')."','".date('H:i:s')."','".$_POST['nombre']."','".$_POST['ciudad']."','".$_POST['estado']."','".$_POST['pais']."','".
			$_POST['codigoPostal']."','".$_POST['correo']."','".$_POST['comentario']."','".$_POST['atencion']."','".""."','".$_POST['telefono']."')";
	$det = "";
    $bd_seleccionada = mysql_select_db("mabakech_baker",$Conectado);
    if (!$bd_seleccionada) {
       $det="No se puede usar BD : ".mysql_error();
    }	
	mysql_query($sql);
Desconectar();


$cuerpo = "<html><head>";
$cuerpo .= "<title>Formulario de contacto desde MaBakerAndChef.Com.</title>";
$cuerpo .= "</head><body>";
$cuerpo .= "<p>Los datos enviados desde el sitio son los siguientes:</p>";
$cuerpo .= "<p></p>";
$cuerpo .= "<p>Nombre y Apellido:  ".$_POST['nombre']."</p>";
$cuerpo .= "<p>Ciudad: ".$_POST['ciudad']."</p>";
$cuerpo .= "<p>Estado: ".$_POST['estado']."</p>";
$cuerpo .= "<p>Pais, Estado de Residencia: ".$_POST['pais']."</p>";
$cuerpo .= "<p>Codigo Postal: ".$_POST['codigoPostal']."</p>";
$cuerpo .= "<p>Correo Electronico: ".$_POST['correo']."</p>";
$cuerpo .= "<p>Número Teléfonico: ".$_POST['telefono']."</p>";
$cuerpo .= "<p>Tipo de Atención: ".$_POST['atencion']."</p>";
$cuerpo .= "<p>Otro Tipo: ".""."</p>";
$cuerpo .= "<p>Mensaje:</p>";
$cuerpo .= "<p>".$_POST['comentario']."\n".$det."\<p>";
$cuerpo .= "<p><\p>";
$cuerpo .= "<p>El mensaje ya fue grabado en MySQL para Seguimiento Posterior</p>";
$cuerpo .= "<p><\p>";
$cuerpo .= "<p><\p>";
$cabecera = "MIME-Version: 1.0\r\n";
$cabecera .= "Content-type: text/html; charset=iso-8859-1\r\n";
$cabecera .= "From: ".$_POST['nombre']."<".$_POST['correo'].">\r\n";
$cabecera .= "Reply-To: ".$_POST['correo']."\r\n";
mail("miguelgas@hotmail.com", "Formulario capturado desde el portal MaBakerAndChef.Com", $cuerpo, $cabecera);

?>
</span></div>
<div align="center" class="fondo-campo Estilo3">GRACIAS, en unos segundos ser&aacute;s redireccionado al contacto.</div>
<script language="JavaScript">
<!--

function SymError()
{
  return true;
}

window.onerror = SymError;

//-->


</body>
</html>
