<?php  
require_once('../conn.php');
$mysqli=mysqli_connect($servername,$username,$password,$dbname);
$id = $_SESSION['log_user_id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$row = mysqli_fetch_array($result);
echo $nombre = $row[1];
?>