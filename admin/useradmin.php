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
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/admin.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php require_once("admin_nav.php"); ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<ul class="list-group">
					  <a href="index.php"><li class="list-group-item active"><span class="glyphicon glyphicon-home"> </span> Inicio</li></a>
					  <a href="cuenta.php"><li class="list-group-item"><span class="glyphicon glyphicon-user"> </span> Mi cuenta</li></a>
					  <a href="bancos.php"><li class="list-group-item"><span class="glyphicon glyphicon-folder-open"> </span> Mis Bancos</li></a>
					  <a href="operaciones.php"><li class="list-group-item"><span class="glyphicon glyphicon-retweet"> </span> Mis Operaciones</li></a>
					  <a href="../logout.php"><li class="list-group-item"><span class="glyphicon glyphicon-log-out"> </span> Salir</li></a>
					</ul>
				</div>
				<div class="col-lg-9"><h2>Bienvenido</h2>
					<form method="POST" action="../cambio.php" class="calculadora">
					<p>Dolar Perú Compra: <?php echo $compra?>/s - Venta: <?php echo $venta?>/s</p>
					<?php require_once('../calculadora.php'); ?>
					<div class="col-lg-12" >
					<a onclick="calcular()" class="btn btn-lg btn-info">calcular</a>
					<input value="Operar" type="submit" class="btn btn-lg btn-success">
				    </div>
					</form>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/ewforex.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style> #tipo{ height:35px;margin:20px 0 20px 0;}.row{margin-top:10px;}</style>
	</body>
</html>