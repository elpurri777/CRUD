<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="practica2.css">
	<script src="js/funciones.js"></script>
	<title>actualizar aprendiz </title>
</head>
<body>
	<div id="divconsulta" class="container">
		<br>
		<div id="div2">
			<div id="div4">
				<form name="formulario" role="form" method="post">
					<div class="col-md-12">
						<strong class="lgris"> Ingrese criterio de busqueda  </strong>
						<br><br>
						<div class="form-row">
							<div class="form-group col-md-3">
								<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" placeholder="Nombres">
							</div>
							<div class="form-group col-md-3">
								<input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" placeholder="Apellidos">
							</div>
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" value="Consultar">
							</div>
						</div>
						<br>
					</div>
				</form>
				<br>
			</div>
			<div id="divconsulta2">
<?php
include 'funciones.php';
session_start();
$vide=$_SESSION=['ide1'];
$vnombres=$_SESSION=['nombres'];
$vapellidos=$_SESSION=['apellidos'];
$vdireccion=$_SESSION=['direccion'];
$vtelefono=$_SESSION=['telefono'];


$miconexion=conectar_bd('1234', 'sena_bd');
$resultado=consulta($miconexion,"update aprendices set apre_nombres='{$vnombres}',apre_apellidos='{$vapellidos}',apre_direccion='{$vdireccion}',apre_telefono='{$vtelefono}' where Apre_id='{$vide}'");

if ($miconexion->affected_rows>0)
{
	echo "Actualizacion exitosa";
}

?>
	</div>
		</div>
	</div>
	
 </body>
</html>