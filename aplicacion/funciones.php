<?php 
	function conectar_bd($clave,$basedatos)
	{
		$conexion = new mysqli('localhost', 'root', '', 'php_login');
		if ($conexion->connect_error) 
		{
			die('error de Conexion (' .$mysqli->connect_errno . ') '. $mysqli->connect_error);
		}
		return $conexion;
	}

	function consulta ($conexion,$consulta_sql)
	{
		$resultado=$conexion->query($consulta_sql);
		if (!$resultado) {
			echo "No se puede ejecutar la consulta: " . $conexion->error;
			exit;
		}
		return $resultado;
	}
 ?>