<?php
session_start();
require_once('../conn.php');
	if(isset($_SESSION['log_user_id'])){
		$id = $_SESSION['log_user_id'];
	}else{
		header('location: ../');
	}
	$pass = $_POST['pass'];
	$pass1 = $_POST['pass1'];
	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "UPDATE users SET pass = '$pass' WHERE id = '$id'";
	if($pass == $pass1){
		mysqli_query($mysqli,$query)or die(mysqli_error());
		echo '
		<script>
			alert("Su clave fue cambiada");
			location.href = "cuenta.php";
		</script>
		';
	}else{
		session_destroy();
		echo '
		<script>
			alert("Detectamos un problema de seguridad!!");
			location.href = "../";
		</script>';
	}
	
?>