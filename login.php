<?php  
    session_start();  
	require_once('conn.php');
    $email = $_POST['email'];  
    $pass = $_POST['pass'];  
    $mysqli=mysqli_connect($servername,$username,$password,$dbname);  
    $query = "SELECT * FROM users WHERE correo='$email' AND pass='$pass'";  
    $result = mysqli_query($mysqli,$query)or die(mysqli_error());  
    $num_row = mysqli_num_rows($result);  
    $row=mysqli_fetch_array($result);  
    if( $num_row >=1 ) {  
    echo 'true';  
    $_SESSION['log_user_id']=$row['id'];
	$_SESSION['user_email']=$row['correo'];
    $_SESSION['user_dni']=$row['dni'];
	sleep(1);
		header('location: admin/index.php');
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
