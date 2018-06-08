<?php
 session_start();  
	require_once('conn.php');
    echo $email = $_GET['cr'];  
    echo $pass = $_GET['clv'];

    $mysqli=mysqli_connect($servername,$username,$password,$dbname);
    $query = "SELECT * FROM forget WHERE correo='$email' AND pass='$pass'";
    $result = mysqli_query($mysqli,$query)or die(mysqli_error());  
    $num_row = mysqli_num_rows($result);  
    $row=mysqli_fetch_array($result);  
    if( $num_row >=1 ) {  
    echo '<br>Si los encontro';

    $query2 = "SELECT * FROM users WHERE correo='$email'";
    $result2 = mysqli_query($mysqli,$query2)or die(mysqli_error());
    $row2=mysqli_fetch_array($result2);

    echo '<br>user:'.$_SESSION['log_user_id']= $row2[0];
	echo '<br>correo:'.$_SESSION['user_email']= $row2[2];
		header('location: admin/cuenta.php');
        }  
        else{  
            echo '
			<script>
			alert("Clave invalida");
			location.href = "inicio.php";
		</script>
			';
        }  
?>