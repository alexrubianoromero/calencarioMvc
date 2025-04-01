<?php
$conexion = new mysqli("localhost", "ctwtvsxj_admin", "ElMejorProgramador***", "ctwtvsxj_enventosNueva");

$sql = "SELECT id, fecha AS start, servicio AS title FROM citas";
$resultado = $conexion->query($sql);

$eventos = [];
while ($fila = $resultado->fetch_assoc()) {
    $eventos[] = $fila;
}

echo json_encode($eventos);
?>
