<?php
session_start();
require_once("../tipocambio.php");
require_once('infopers.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>
		<link href="css/admin.css" rel="stylesheet">
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php require_once("admin_nav.php"); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<ul class="list-group">
					  <a href="index.php"><li class="list-group-item"><span class="glyphicon glyphicon-home"> </span> Inicio</li></a>
					  <a href="cuenta.php"><li class="list-group-item active"><span class="glyphicon glyphicon-user"> </span> Mi cuenta</li></a>
					  <a href="bancos.php"><li class="list-group-item"><span class="glyphicon glyphicon-folder-open"> </span> Mis Bancos</li></a>
					  <a href="operaciones.php"><li class="list-group-item"><span class="glyphicon glyphicon-retweet"> </span> Mis Operaciones</li></a>
					  <a href="../logout.php"><li class="list-group-item"><span class="glyphicon glyphicon-log-out"> </span> Salir</li></a>
					</ul>
				</div>
				
				<div class="col-lg-9">
					<div class="camb-clave">
							<form  id="form1" method="POST" class="formulario" action="cambioclave.php" onsubmit="return enviar()">
							  <h2>Cambio de contraseña</h2>
							  <div class="form-group">
								<label for=""><span class="fa fa-lock"></span> Password</label>
								<input name="pass" type="password" class="form-control" id="pass" aria-describedby="passwordHelp" placeholder="Password" minlength="4" maxlength="20" required>
							  </div>
							  <div class="form-group">
								<label for=""><span class="fa fa-lock"></span>Repita el Password</label>
								<input name="pass1" type="password" class="form-control" id="pass1" aria-describedby="passwordHelp" placeholder="Password" minlength="4" maxlength="20" required>
							  </div>
							  <input value="Guardar" type="submit" class="btn btn-success"></input>
							</form>
						</div>
					<div class="col-lg-12" >
						<div class="camb-clave">
						<h2>Informacion Personal</h2>
						<form  id="form" method="post" class="formulario" action="editinfo.php" onsubmit="return enviar()";>
						  <div class="form-group">
							<label for=""><span class="fa fa-user"></span> Nombre</label>
							<input value="<?php echo $nombre?>" name="nombre" type="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre" minlength="2" required>
						  </div>
						  <div class="form-group">
							<label for=""><span class="fa fa-address-card"></span> DNI</label>
							<input value="<?php echo $dni?>" name="dni" type="number" class="form-control" id="dni" aria-describedby="emailHelp" placeholder="DNI"required>
						  </div>
						  <div class="form-group">
							<label for=""><span class="fa fa-phone"></span> Telefono</label>
							<input value="<?php echo $telefono?>" name="telefono" type="text" class="form-control" id="telefono" aria-describedby="emailHelp" placeholder="Telefono" required>
						  </div>
						  <div class="form-group">
							<label for=""><span class="fa fa-envelope"></span> Email</label>
							<input value="<?php echo $correo?>" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
						  </div>
						  <input value="Guardar" type="submit" class="btn btn-info"></input>
						</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<script src="../js/claves-comparer.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/ewforex.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>#tipo{ height:35px;margin:20px 0 20px 0;}.row{margin-top:10px;}</style>
	</body>
</html>