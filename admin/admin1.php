<?php
session_start();
require_once('validacion.php');
if(validacion() != true){
	header('location: ../logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin+</title>
		<link href="css/admin.css" rel="stylesheet">
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
  	<header></header>
  	<section>
  		<div class="container">
  			<div class="row">
  			    <div class="col-lg-6">
  			    	<h3>Tipos de cambio</h3>
			    <form action="proc-tipo.php" method="post"><br>
			    	Compra
				    <input name="compra" type="text" class="form-control" placeholder="Compra">
				    <br>Venta
			      	<input name="venta" type="text" class="form-control" placeholder="Venta"><br>
			    	<input class="btn btn-info btn-lg" type="submit"><br><br>
			  		<a href="../index.php" class="btn btn-danger btn-lg" type="button">salir</a>
		  		</form>
				</div>
  			</div>
  		</div>
  	</section>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/ewforex.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>