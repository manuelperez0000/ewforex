<?php  
require_once('conn.php');
if(isset($_SESSION['log_user_id'])){$id=$_SESSION['log_user_id'];}else{header('location: ../');}
	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "SELECT * FROM bancos WHERE usuario_id = $id";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		echo 'h
		<option>'.$row[2].' - '.$row[4].' - '.$row[5].' - '.$row[3].'</option>';
	}
?>