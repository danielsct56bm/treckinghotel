<?php 
$contrasena = "vt2Pp6@dx9Q4";
$usuario = "grupo1";
$nombre_bd = "grupo1";

try {
	$bd = new PDO (
		'mysql:host=bdmysql.testing-apps.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>