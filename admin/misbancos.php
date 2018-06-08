<?php  
require_once('../conn.php');
if(isset($_SESSION['log_user_id'])){$id=$_SESSION['log_user_id'];}else{header('location: ../');}
	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "SELECT * FROM bancos WHERE usuario_id = $id";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		echo '
		<tr>
			<td>'.$row[2].'</td>
			<td>'.$row[3].'</td>
			<td>'.$row[4].'</td>
			<td>'.$row[5].'</td>
			<td>
				<a href="borrar_cuenta.php?id_banco='.$row[0].'"><span class="glyphicon glyphicon-trash"></span></a> 
				
			</td>
		</tr>
		';
	}
?>