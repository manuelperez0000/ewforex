<?php
session_start();
require_once('../conn.php');
if(isset($_SESSION['log_user_id'])){$id = $_SESSION['log_user_id'];}else{header('location: ../');}
	
	$id_banco = $_GET['id_banco'];
	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "DELETE FROM bancos WHERE id = $id_banco";
	if(mysqli_query($mysqli,$query)or die(mysqli_error())){
		echo '
		<script>
			alert("Banco Eliminado'.$id_banco.'");
			location.href = "bancos.php";
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