<?php include_once 'config/db.php'; 
$id=$_GET['t'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba PostgreSQL - PHP</title>
</head>
<body>
	<h1>formulario con postgresql</h1>
	<?php 
		$query = "SELECT * FROM usuarios WHERE id = '$id'";
		$execute=pg_query($conn, $query);
		$row=pg_fetch_array($execute);
		$id = $row[0];
		$nombre = $row[1];
		$correo = $row[2];
		$direccion = $row[3];
		$telefono = $row[4];

	 ?>
	<form autocomplete="off" method="post" action="func/actualizar.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label>nombre</label>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		<br>
		<label>correo</label>
		<input type="email" name="correo" value="<?php echo $correo; ?>">
		<br>
		<label>direccion</label>
		<input type="text" name="direccion" value="<?php echo $direccion; ?>">
		<br>
		<label>telefono</label>
		<input type="text" name="telefono" value="<?php echo $telefono; ?>">
		<br>
		<input type="submit" name="enviar">
	</form>
	
</body>
</html>