<?php
include_once '../config/db.php'; 
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$query = "UPDATE usuarios SET nombre='$nombre', correo='$correo', direccion='$direccion', telefono='$telefono' WHERE id ='$id'";
pg_query($conn, $query);
header("location: ../index.php");
 ?>