<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<title>Guardar datos</title>
</head>

<body>
	<form action="./procesos/guardarDatos.php" method="POST">
		<label>Nombre</label><input type="text" name="nombre"><br><br>
		<label>Apellido1</label><input type="text" name="apellido1"><br><br>
		<label>Apellido2</label><input type="text" name="apellido2"><br><br>
		<label>Email</label><input type="email" name="email"><br><br>
		<label>Password</label><input type="password" name="password"><br><br>
		<input type="submit" value="Guardar">
	</form>
</body>

</html>