<?php  
    session_start();  
	require_once('../conn.php');
    $compra = $_POST['compra'];
    $venta = $_POST['venta'];
    $mysqli=mysqli_connect($servername,$username,$password,$dbname);  
    $query = "UPDATE tipos SET venta_dolar=$venta, compra_dolar='$compra'";  
    mysqli_query($mysqli,$query)or die(mysqli_error());  
    header('location: admin1.php');
       
?>  