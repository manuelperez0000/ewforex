<?php 
session_start();

require_once("connect.php");
unset($_SESSION['log_user_id']);
if(isset( $_POST["nombre"])){$nombre = $_POST["nombre"];}
$mysqli=mysqli_connect($servername,$username,$password,$dbname);  


$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];

$query2 = "SELECT * FROM users WHERE correo = '$correo'";
$result2 =  mysqli_query($mysqli,$query2)or die(mysqli_error());  
$num_row2 = mysqli_num_rows($result2);
if($num_row2<1){
	$sql = "INSERT INTO users (nombre, dni, telefono, correo, pass)
	VALUES ('$nombre', '$dni', '$telefono','$correo','$pass')";

	if ($conn->query($sql) === TRUE) {
    $query = "SELECT * FROM users WHERE dni = '$dni'";
	$mysqli=mysqli_connect($servername,$username,$password,$dbname); 
	$result =  mysqli_query($mysqli,$query)or die(mysqli_error());  
	$row = mysqli_fetch_array($result);
	$_SESSION['log_user_id'] = $row['id'];
	$_SESSION["dni"] = $dni;
	echo '<script> alert("Felicitaciones! Se a registrado con exito")
	location.href = "admin/";
	</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}else{
	echo "
	<script>
		alert('Este correo ya se encuentra registrado, ingrese a Olvide mi clave y podrá recuperar su cuenta.')
		location.href = 'inicio.php';
	</script>";
}
/*

$conn->close();*/
?>