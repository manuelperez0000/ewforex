<?php 
header('Cache-Control: no cache');
session_cache_limiter('private_no_expire');
session_start(); 
if(isset($_SESSION['log_user_id'])){ 
$sesion = 'yes';
      /*echo "<a href='logout.php' id='logout'>Logout</a>"; */
		}else {
			$sesion = 'no';
		/*echo "<a id='login_a' href='#'>login</a>";	*/
		}	
?>
<!DOCTYPE html>
<html lang="en">
  <?php require_once('head.php') ?>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php">Regresar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead text-center text-white d-flex">
	<div class="marg-top transp bg-fond " id="transp">
      <div class="container cabecera my-auto">
        <div class="row">
		  <div class="col-lg-5">
			<div class="formulario">
			<p class="titulo">Iniciar Session</p>
				<form action="login.php" method="post">
				  <div class="form-group">
					<label for=""><span class="fa fa-envelope"></span> Email</label>
					<input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
				  </div>
				  <div class="form-group">
					<label for=""><span class="fa fa-lock"></span> Password</label>
					<input name="pass" type="password" class="form-control" id="pass" aria-describedby="passwordHelp" placeholder="Password" required="">
				  </div>
				  <input value="Ingresar" type="submit" class="btn btn-success"></input>
				  <a class="link_oscuro" href="recuperarpass.php">Olvide mi clave</a>
				</form>
			</div>No tienes cuenta? <a href="registro.php">Registrate</a>
		  </div>
        </div>
      </div>
	  </div>
    </header>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
  </body>
</html>
