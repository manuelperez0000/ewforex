<?php
header('charset: utf8');
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
session_start();
require_once('conn.php');
$email = $_POST['email'];
$mysqli=mysqli_connect($servername,$username,$password,$dbname);
$query = "SELECT * FROM users WHERE correo='$email'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$row=mysqli_fetch_array($result);
if($row['correo']== true){

	$clave=$row['pass'];
	$direccion = $row['correo'];
	$titulo = "Recuperacion de clave ewforex.net";
	$correo = $_POST['email'];

	$letras = 'q.w.e.r.t.y.u.i.o.p.a.s.d.f.g.h.j.k.l.z.x.c.v.b.n.m';
	$i=0;
	$cadena = '';
		while($i < 4){
			$i = $i+1;
			$l = rand(0,25);
			$let = explode('.', $letras);
			$p = $let[$l];
			$cadena = rand(123,987).$p.$cadena;
		}
	$mensaje = "Recuperacion de Clave:
	Click en el enlace para recuperar su clave: http://www.ewforex.net/nuevaclave.php?cr=".$correo."&clv=".$cadena;
	mail($direccion,$titulo,$mensaje);
	
	$query2 = "INSERT INTO forget (pass, correo) VALUES ('$cadena','$correo')";
	mysqli_query($mysqli,$query2)or die(mysqli_error());
	echo "<script>alert('Le enviaremos un link de recuperacion al correo para recuperar su contraseña');
	location.href = 'inicio.php';
	</script>";
	
}else{
	echo "<script>
	alert('El correo ingresado no existe en nuestra base de datos');
	location.href = 'recuperarpass.php';
	</script>";
}
?>

