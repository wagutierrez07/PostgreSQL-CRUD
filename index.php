
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba PostgreSQL - PHP</title>
</head>
<body>
	<h1>formulario con postgresql</h1>
	<form autocomplete="off" method="post" action="post.php">
		<label>nombre</label>
		<input type="text" name="nombre">
		<br>
		<label>correo</label>
		<input type="email" name="correo">
		<br>
		<label>direccion</label>
		<input type="text" name="direccion">
		<br>
		<label>telefono</label>
		<input type="text" name="telefono">
		<br>
		<input type="submit" name="enviar">
	</form>
	<br>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Acciones</th>
			</tr>
			<?php include_once 'config/db.php'; 
			$query="SELECT * FROM usuarios ORDER BY id ASC";
			$execute=pg_query($conn, $query);
			while ($row = pg_fetch_array($execute)) {
			?>
			<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[4]; ?></td>
				<td>
					<a href="edicion.php?t=<?php echo $row[0]; ?>">Editar</a>
					&nbsp;
					<a href="func/eliminar.php?t=<?php echo $row[0]; ?>">Eliminar</a>
				</td>
			</tr>
			<?php 	
					}
			?>
		</thead>
	</table>
</body>
</html>