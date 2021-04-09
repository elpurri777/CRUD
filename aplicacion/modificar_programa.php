<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="practica2.css">
	<script src="js/funciones.js"></script>
	<title>Modificacion de Aprendices</title>
</head>
<body>
	<div id="divconsulta" class="container">
		<br>
		<div id="div2">
			<div id="div4">
				<form name="formulario" role="form" method="post">
					<div class="col-md-12">
						<strong class="lgris">Ingrese criterio de busqueda</strong>
						<br><br>
						<div class="form-row">
							<div class="form-group col-md-5">
								<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" autofocus="" value="" placeholder="N° FICHA">
							</div>
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" value="MODIFICAR">
							</div>
						</div>
						<br>
					</div>
				</form>
				<br>
			</div>
			<div id="divconsulta2">
				<?php
				if ($_SERVER=['RESQUEST_METHOD']==='POST') 
				{
					include 'funciones.php';
					session_start();
					$vnumid=$_POST['numid'];
					$miconexion=conectar_bd('1234', 'sena_bd');
					$resultado=consulta($miconexion,"select * from aprendices where Apre_Numid='{$vnumid}'");

					if ($resultado->num_rows>0) 
					{
						$fila=$resultado->fetch_object();
						$_SESSION['ide1']=$fila->Apre_id;
						?>
						<form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
							<div class="col-md-12">
								<strong class="lgris">Datos del aprendiz</strong>
								<br>
								<label class="lgris">Id:</label>
								<input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->Apre_id  ?>">

								<label class="lgris">Nombres:</label>
								<input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" required=""  value="<?php echo $fila->Apre_Nombres  ?>">

								<label class="lgris">Apellidos:</label>
								<input class="form-control" type="text" name="apellidos" required=""> value="<?php echo $fila->Apre_Apellidos ?>">

								<label class="lgris">Direccion:</label>
								<input class="form-control" type="text" name="direccion"  required=""> value="<?php echo $fila->Apre_Direccion  ?>">

								<label class="lgris">Telefono:</label>
								<input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" required="" value="<?php echo $fila->Apre_Telefono ?>">
								<br>
								<input class="btn btn-primary" type="submit" value="Actualizar">
								<br>
							</div>
						</form>
					<?php 
				}
				else
				{
					echo "No existen registros";
				}
				$miconexion->close();
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>