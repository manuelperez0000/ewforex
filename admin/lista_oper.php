<?php  
require_once('../conn.php');
if(isset($_SESSION['log_user_id'])){$id=$_SESSION['log_user_id'];}else{header('location: ../');}
	$mysqli=mysqli_connect($servername,$username,$password,$dbname);  
	$query = "SELECT * FROM operaciones WHERE user = $id";
	$result = mysqli_query($mysqli,$query)or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		if($row[7]==1){
			$tipo = '/S';
			$tipo1 = 'USD';
		}else if($row[7]==2){
			$tipo = 'USD';
			$tipo1 = '/S';
		}
		echo '
		<tr>
			<td>'.$row[0].'</td>
			<td>'.$row[2].'</td>
			<td>'.$row[6].' '.$tipo.'</td>
			<td>'.$row[4].' '.$tipo1.'</td>
			<td>'.$row[5].'</td>
		</tr>
		';
	}
?>