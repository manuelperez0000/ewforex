<?php 
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Casa de Cambios - ewforex.net</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
	<link href="css/css2.css" rel="stylesheet">
	<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5jSB9YTyY5VdrVvfT319qoxNcA3NKwRN";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
	
  </head>
	
  <body id="page-top">

    <!-- Navigation -->
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
			<p class="titulo">Ingrese los datos de su operacion</p>
				<form action="datos2.php" method="post">
				  <div class="form-group">
					<label for="">Monto depositado</label>
					<input name="monto" type="number" class="form-control" id="monto" aria-describedby="emailHelp" placeholder="Monto" required>
				  </div>
				  <div class="form-group">
					<label for="">En Que banco deposito?</label>
					<select name="banco" class="form-control">
						<option>BBVA Continental</option>
						<option>BCP</option>
					</select>					
				  </div>
				  <div class="form-group">
					<label for="">Codigo de Operacion</label>
					<input name="codigo" type="text" class="form-control" id="codigo" placeholder="Cod." required>
				  </div>
				  <input value="Siguiente" type="submit" class="btn btn-success"></input>
				</form>
			</div>
		  </div>
        </div>
      </div>
	  </div>
    </header>

	<!-- Button trigger modal -->


<!-- Modal -->
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
