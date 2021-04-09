<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="practica2.css">
	<script src="js/funciones.js"></script>
	<title>Document</title>
</head>
<body>
	<div id="div1" class="container">
		<br>
		<div id="div2">
			
		 <img src="logoSena.png" > 
			<div id="div3">
				<form id="formulario" method="post" action="menu.php">
					<br>
					<strong class="lgris">Ingrese su usuario  y contraseña para iniciar sesion</strong>
					<br>
					<br></br>
					<label class="lgris"> Usuario:</label>
					<br>
					<input  type="text" name="usuario" value="" required="">
					<br>
					<label class="lgris">Contraseña:</label>
					<br>
					<input type="password" name="clave" value="" required="">
					<br><br>
					<input class="btn btn-danger" type="submit" value="iniciar sesion">
					<br><br>

					

				</form>
			</div>
		</div>
	</div>
</body>
</html>