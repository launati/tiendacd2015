<?php
include("config_mysql.php");

function conectar(){
	$con = mysql_connect(HOST,USER,PASS)
	or die ("ERROR EN CONEXION: ".mysql_error());
	$base_datos = mysql_select_db(DB,$con)
	or die ("ERROR AL SELECCIONAR BASE DE DATOS: ".mysql_error());

	return $con:
}

?>