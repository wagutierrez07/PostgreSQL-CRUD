<?php 
include_once 'config/db.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO usuarios values (default, '$nombre', '$correo', '$direccion', '$telefono')";
pg_query($conn, $query);

header("location:index.php");

 ?>