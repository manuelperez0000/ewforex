<?php
session_start();
require_once("../tipocambio.php");
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
					  <a href="cuenta.php"><li class="list-group-item"><span class="glyphicon glyphicon-user"> </span> Mi cuenta</li></a>
					  <a href="bancos.php"><li class="list-group-item active"><span class="glyphicon glyphicon-folder-open"> </span> Mis Bancos</li></a>
					  <a href="operaciones.php"><li class="list-group-item"><span class="glyphicon glyphicon-retweet"> </span> Mis Operaciones</li></a>
					  <a href="../logout.php"><li class="list-group-item"><span class="glyphicon glyphicon-log-out"> </span> Salir</li></a>
					</ul>
				</div>
				<div class="col-lg-9">
					<div class="col-lg-12" >
						<h2>Mis Bancos</h2>
						<table class="table">
							<thead>
								<tr>
								<td>Banco</td>
								<td>Nro. Cuenta</td>
								<td>Tipo cuenta</td>
								<td>Moneda</td>
								<td></td>
								</tr>
							</thead>
							<tbody>
								<?php require_once('misbancos.php'); ?>
							</tbody>
						</table>
					</div>
					<form method="POST" action="agregarbanco.php" class="banco">
						<input name="vie" type="hidden" value="<?php if(isset($_GET['vie'])){ echo $_GET['vie']; }; ?>">
						<div class="col-lg-12" >
							<div class="camb-clave">
								<h2>Agregar Bancos</h2>
								<span>Nombre de su Banco</span>
								<input name="banco" type="text" class="form-control">
								<span>Tipo de Cuenta</span>
								<select name="tipo" id="tipo" class="form-control">
									<option>Ahorros</option>
									<option>Corriente</option>
								</select>
								<span>Moneda</span>
								<select name="moneda" id="tipo" class="form-control">
									<option>Soles</option>
									<option>Dolares</option>
								</select>
								<span>Numero de Cuenta</span>
								<input name="cuenta" type="text" class="form-control"><br>
								<input type="Submit" class="btn btn-success">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/ewforex.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>