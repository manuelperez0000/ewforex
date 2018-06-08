<?php
session_start();
require_once('../conn.php');
if(isset($_SESSION['log_user_id'])){$id=$_SESSION['log_user_id'];}else{header('location: ../');}
$vie = $_POST['vie'];
	$banco  = $_POST['banco'];
	$cuenta = $_POST['cuenta'];
	$tipo   = $_POST['tipo'];
	$moneda = $_POST['moneda'];

	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "INSERT INTO bancos (id,usuario_id,banco,cuenta,tipo,moneda) VALUES ('','$id','$banco','$cuenta','$tipo','$moneda')";
	
		if(mysqli_query($mysqli,$query)or die(mysqli_error())){
			if(isset($vie)){
				if($vie == 1){
				header('location: ../datos2.php?'.$_POST['vie'].'');
				}
			}
			
			echo '<script>
			alert("Agregado con exito!");
			location.href = "bancos.php";
		</script>';
		}else{
			echo '<script>
			alert("Ups Ocurrio algun problema!");
			location.href = "bancos.php";
		</script>';
		}
			
?>