<?php 
$id=$_GET['t'];
include_once '../config/db.php';
$query = "DELETE FROM usuarios WHERE id ='$id'";
pg_query($conn, $query);
header("location: ../index.php");
 ?>