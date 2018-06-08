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
					  <a href="bancos.php"><li class="list-group-item"><span class="glyphicon glyphicon-folder-open"> </span> Mis Bancos</li></a>
					  <a href="operaciones.php"><li class="list-group-item active"><span class="glyphicon glyphicon-retweet"> </span> Mis Operaciones</li></a>
					  <a href="../logout.php"><li class="list-group-item"><span class="glyphicon glyphicon-log-out"> </span> Salir</li></a>
					</ul>
				</div>
				<div class="col-lg-9"><h2>Operaciones Realizadas</h2>
					<div class="col-lg-12" >
						<table class="table">
							<thead>
								<tr>
									<td>ID</td>
									<td>Fecha</td>
									<td>Envías</td>
									<td>Recibes</td>
									<td>Estatus</td>
								</tr>
							</thead>
							<tbody>
								<?php require_once("lista_oper.php"); ?>
							</tbody>
							
						</table>
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/ewforex.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>#tipo{ height:35px;margin:20px 0 20px 0;}.row{margin-top:10px;}</style>
	</body>
</html>