<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="practica2.css">
	<script src="js/funciones.js"></script>
	<title>Registros de Aprendizes</title>
</head>
<body>
	<div id="div1" class="container">
		<br>
		<div id="div2">
			<?php session_start(); if (! empty($_SESSION['Tipo_usuario'])) { ?>
				<img src="sena123.jpg"> <?php } ?>
				<div id="div3">
					<?php
					if ($_SESSION['Tipo de usuario']='ADMINISTRADOR') 
					{
						?>
						<form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
							<div class="col-md-12">
								<strong class="lgris">Ingrese los datos del aprendiz</strong>
								<br>
								<label class="lgris">Identificacion:</label>
								<div class="form-row">
									<div class="form-group col-xs-2">
										<select class="form-control" name="tipoid">
											<option value="CC" selected="">CC</option>
											<option value="TI">TI</option>
											<option value="RC">RC</option>
											<option value="PEP">PEP</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION" required="">
									</div>
								</div>
								<label class="lgris">Nombres:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required="">
								<label class="lgris">Apellidos:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required="">
								<label class="lgris">Direccion:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="" placeholder="Direccion" required="">
								<label class="lgris">Telefono:</label>
								<input class="form-control" style="text-transform: uppercase;" type="numnber" name="telefono" value="" placeholder="Telefono" required="">
								<label class="lgris">Ficha:</label>
								<input class="form-control" style="text-transform: uppercase;" type="numnber" name="ficha" value="" placeholder="Ficha" required="">
								<br>
								<input class="btn btn-primary" type="submit" value="Guardar">

							</div>
						</form>
					<?php 
				}
				else
				{
					echo "No tiene permisos para realizar esta accion";
					 
				}
				?>
				<br>
				</div>
		</div>
	</div>
</body>
</html>