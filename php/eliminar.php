<?php

	require_once "php/connect.php";
	if(isset($_GET['idUsuarios'])){
		$id=$_GET['idUsuarios'];
		$query="DELETE FROM Usuarios WHERE idUsuarios='$idUsuarios'";
		if($mysqli->query($query)){
			echo "Registro eliminado";
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
		echo "Error no se pudo procesar la peticion";
	}