<?php session_start();

// El mensaje
$mensaje =
'OPERACION EN LINEA
Monto sugerido: '.$_SESSION["monto"].'
Monto depositado '.$_SESSION['monto'].'
Banco '.$_SESSION['banco'].'
Tipo de operacion '.$_SESSION["tipo"].'
Taza '.$_SESSION["taza"].'

DATOS DEL DEPOSITO
Banco_dep: '.$_SESSION['banco_dep'] = $_POST['banco_dep'].'
Codigo: '.$_SESSION['codigo'].'
Recibe  '.$_SESSION["total"];

$mensaje2 =
'EWForex.net - Operacion en Linea
Monto Ingresado: '.$_SESSION["monto"].'
Monto Depositado '.$_SESSION['monto'].'
Banco '.$_SESSION['banco'].'
Taza '.$_SESSION["taza"].'
Recibe  '.$_SESSION["total"];

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");
$mensaje2 = wordwrap($mensaje2, 70, "\r\n");

// Enviarlo

mail('manuelperez.0000@gmail.com', 'Operacion - ewforex.net', $mensaje);
mail($_SESSION['user_email'], 'Comprobante de cambio - ewforex.net', $mensaje2);
require_once('guardar_operacion.php');
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
      </div>
    </nav>
    <header class="masthead text-center text-white d-flex">
	<div class="marg-top transp bg-fond " id="transp">
      <div class="container cabecera my-auto">
        <div class="row">
          <div class="col-lg-2"></div>
		  
		  <div align="center" class="col-lg-8 bg-feliz">
			<h1><span class="fa fa-check"></span></h1>
			<h2>FELICITACIONES!</h2>
			<p>Usted a realizado su operacion con exito, en breves minutos estaremos realizando la comprobacion del pago y transfiriendo el dinero a su cuenta</p>
		  </div>
		  <div class="col-lg-2"></div>
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
