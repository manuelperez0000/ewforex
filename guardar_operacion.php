<?php
require_once('conn.php');
if(isset($_SESSION['log_user_id'])){$id=$_SESSION['log_user_id'];}else{header('location: ../');}
	
	$user = $id;
	$fecha = date('d/m/y');
	$envia = $_SESSION["monto"];
	$recibe = $_SESSION["total"];
	$status ='Pendiente';
	$monto_reg = $_SESSION['monto'];
	$tipo = $_SESSION["tipo"];
	$taza = $_SESSION["taza"];
	$banco = $_SESSION['banco'];
	$codigo = $_SESSION['codigo'];
	$banco_receptor = $_POST['banco_dep'];
	
	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "INSERT INTO operaciones (id,user,fecha,envia,recibe,status,monto_reg,tipo,taza,banco,codigo,banco_receptor) VALUES ('','$user','$fecha','$envia','$recibe','$status','$monto_reg','$tipo','$taza','$banco','$codigo','$banco_receptor')";
	if(mysqli_query($mysqli,$query)or die(mysqli_error())){
			echo '<script>
			alert("Operacion Exitosa");
		</script>';
		}else{
			echo '<script>
			alert("Ups Ocurrio algun problema!");
		</script>';
		}
			
?>