<?php
//print_r($_POST);
if (empty($_POST["oculto"]) || empty($_POST["txtid_persona"]) || empty($_POST["txtid_habitacion"]) || empty($_POST["txtdiain"]) || empty($_POST["txtdiafin"]) || empty($_POST["txtdescripcion"])) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$id_persona = $_POST["txtid_persona"];
$id_habitacion = $_POST["txtid_habitacion"];
$diain = $_POST["txtdiain"];
$diafin = $_POST["txtdiafin"];
$descripcion = $_POST["txtdescripcion"];

$sentencia = $bd->prepare("INSERT INTO reserva(id_persona,id_habitacion,diain,diafin,descripcion) VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$id_persona, $id_habitacion, $diain, $diafin, $descripcion]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
