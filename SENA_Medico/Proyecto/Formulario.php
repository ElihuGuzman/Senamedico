<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Registro</title>
	<meta charset="utf-8 /">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-nd-6">
				<H2>¡Bienvenido al sistema!</H2>
				<form role="form" name"" action="" method="post">
					<div class="form-group">
						<label for="username">Documento de Usuario</label>
						<input type="text" class="form-control" id="user" name="documento" placeholder="Documento">
					</div>
					<div class="form-group">
						<label for="username">Nombres de Usuario</label>
						<input type="text" class="form-control" id="username1" name="nombre1" placeholder="Primer nombre">
						<br/>
						<input type="text" class="form-control" id="username2" name="nombre2" placeholder="Segundo nombre">
					</div>
					<div class="form-group">
						<label for="username">Apellido de Usuario</label>
						<input type="text" class="form-control" id="userlast1" name="apellido1" placeholder="Primer apellido">
						<br/>
						<input type="text" class="form-control" id="userlast2" name="apellido2" placeholder="Segundo apellido">
					</div>
					<div class="form-group">
						<label for="username">Dirección</label>
						<input type="text" class="form-control" id="direc" name="direccion" placeholder="Dirección">
					</div>
						<div class="form-group">
						<label for="username">Teléfono celular</label>
						<input type="text" class="form-control" id="telefono" name="celular" placeholder="Celular">
					</div>
					<button type="submit" name= "iniciar" class="btn btn-secondary">Acceder</button>
					<a href="guardar.php"><button class="btn btn-primary" type="button"> Nuevo</button>
					</form>

 
 </div>
  </div>
  </div>
</body>
  </html>

