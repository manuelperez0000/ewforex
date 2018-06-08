<?php
require_once('../conn.php');
	$id = $_SESSION['log_user_id'];
	$mysqli=mysqli_connect($servername,$username,$password,$dbname); 
	$query = "SELECT * FROM users WHERE id ='$id'";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	
	$row=mysqli_fetch_array($result);
	$nombre = $row[1];
	$dni = $row[2];
	$telefono = $row[3];
	$correo = $row[4];
	
	
?>