<?
if (__Conexion_inc == 1)
	return;
define ('__Conexion_inc', 1);

function Conectar() {
	global $Conectado;
	$Conectado=mysql_connect('localhost','mabakech_admin','F5_2wD&y');
	}

function Desconectar() {
	global $Conectado;

    mysql_close($Conectado);
}
?>