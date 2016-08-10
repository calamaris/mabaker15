<link rel="stylesheet" href="css/Estilo2.css">

<?
	include('Campos.inc.php');
	include('Conexion.inc.php');
	include('Paginas.inc.php');


	$PaginaTitulo = "Lista de Contactos";

	Conectar();

	$sql = "select * from Visitas order by Fecha desc";		 
    mysql_select_db("mabakech_baker",$Conectado);
	$rs = mysql_query($sql);

	$titulos = array("Fecha", "Hora", "Nombre", "Ciudad", "Estado", "Pais", "CP", "EMail", "TProveedor", "OProveedor", "Telefono", "Comentario");

?>

<center>

<?
function MuestraRegistro($reg) {
	FilaInicio();
	DatoGenera($reg["Fecha"]);
	DatoGenera($reg["Hora"]);
	DatoGenera($reg["Nombre"]);
	DatoGenera($reg["Ciudad"]);
	DatoGenera($reg["Estado"]);
	DatoGenera($reg["Pais"]);
	DatoGenera($reg["CP"]);
	DatoGenera($reg["EMail"]);
	DatoGenera($reg["TProveedor"]);
	DatoGenera($reg["OProveedor"]);
	DatoGenera($reg["Telefono"]);
	DatoGenera($reg["Comentario"]);
	FilaFinal();
}

	TablaInicio($titulos, '100%');

	while ($reg=mysql_fetch_array($rs, MYSQL_BOTH)) 
				MuestraRegistro($reg);
				
	TablaFinal();
?>

</center>

<?	
	Desconectar();
?>
