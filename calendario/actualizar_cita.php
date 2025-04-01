<?php
$conexion = new mysqli("localhost", "ctwtvsxj_admin", "ElMejorProgramador***", "ctwtvsxj_enventosNueva");
$sql = "update  citas set fecha =  '".$_REQUEST['nuevaFecha']."' where id =   '".$_REQUEST['id']."'";
$conexion->query($sql);

echo "Cita guardada";
?>
