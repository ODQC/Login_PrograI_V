<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Editar datos</title>
</head>
<body>
	<?php
		if(isset($_GET['id'])){
			require_once "php/connect.php";
			$id=$_GET['idUsuarios'];
			$query="SELECT * FROM Usuarios WHERE idUsuarios='$idUsuarios'";
			$consulta1=$mysqli->query($query);
			$fila=$consulta1->fetch_array(MYSQLI_ASSOC);
			echo '<form action="./procesos/editarDatos.php" method="POST">
				<input type="hidden" name="idUsuarios" value="'.$fila['idUsuarios'].'">
				<label>Nombre</label><input type="text" name="nombre" value="'.$fila['Nombre'].'"><br><br>
				<label>Apellido</label><input type="text" name="apellido1" value="'.$fila['apellido1']. '"><br><br>
				<label>Apellido</label><input type="text" name="apellido2" value="' . $fila['apellido2'] . '"><br><br>
				<label>Email</label><input type="email" name="email" value="'.$fila['Email'].'"><br><br>
				<p>Si quieres actualizar tu clave escribe la clave antigua y escribe y repite la clave nueva</p>
				<label>Clave original</label><input type="password" name="password1"><br><br>
				<label>Clave nueva</label><input type="password" name="password"><br><br>
				<label>Repetir clave nueva</label><input type="password" name="clave3"><br><br>
				<input type="submit" value="Actualizar">
			</form>';
		}else{
			echo "Ocurrio un error inesperado";
		}
	?>
</body>
</html>