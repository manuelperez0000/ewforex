<?php
session_start();
require_once('../conn.php');
	$id = $_SESSION['log_user_id'];
	$nombre = $_POST['nombre'];
    $correo = $_POST['email'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "UPDATE users SET nombre = '$nombre', dni = '$dni', telefono = '$telefono', correo = '$correo' WHERE id = '$id'";
	mysqli_query($mysqli,$query)or die(mysqli_error());
	
	header('location: cuenta.php');
?>