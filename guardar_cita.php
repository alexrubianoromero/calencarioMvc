<?php
$conexion = new mysqli("localhost", "ctwtvsxj_admin", "ElMejorProgramador***", "ctwtvsxj_enventosNueva");

// $fecha = $_REQUEST['fecha'];
// $servicio = $_REQUEST['servicio'];
// // $nombre = $_REQUEST['nombre'];
// $placa = $_REQUEST['placa'];

$sql = "INSERT INTO citas (fecha, placa,hora,email,servicio) 
VALUES ('".$_REQUEST['fecha']."','".$_REQUEST['placa']."'
,'".$_REQUEST['hora']."','".$_REQUEST['email']."','".$_REQUEST['servicio']."')";
$conexion->query($sql);

echo "Cita guardada";
?>
