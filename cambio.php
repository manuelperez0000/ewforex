<?php 
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
session_start(); 
?>
<!DOCTYPE html>
<html lang="en" class="">
<?php
	if($_POST["tipo"] == 1){
		$moneda1 = "Soles";
		$moneda2 = "Dolares";
		$der = '/s';
		$der2= 'USD';
		$taza = $_SESSION['venta'];
	}else{
		$moneda2 = "Soles";
		$moneda1 = "Dolares";
		$der = 'USD';
		$der2= '/s';
		$taza = $_SESSION['compra'];
	}
	$_SESSION["monto"] = $_POST["monto"];
	$monto = $_SESSION["monto"];
	$_SESSION["tipo"] = $_POST["tipo"];
	$_SESSION["taza"] = $taza;
	$tipo = $_SESSION["tipo"];
	
	if($_POST["tipo"] == 1){
		$total = $monto / $taza;
	}else{
		$total = $monto * $taza;
	}
	$total = Round($total,2);
	
	$_SESSION["total"] = $total;
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Casa de Cambios - ewforex.net</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">
	<link href="css/css2.css" rel="stylesheet">
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5jSB9YTyY5VdrVvfT319qoxNcA3NKwRN";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>

  </head>
	
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
	<div class="marg-top bg-fond transp " id="transp">
      <div class="container cabecera my-auto">
        <div class="row">
          <div class="col-lg-7 mx-auto bg-cambio">
           <span class="txt-cambio cabecera-cambio">
		   <div class="row txt-wrap">
		   <table>
			   <tr>
					<td><h2 class="txt-cam"> <?php echo $moneda1; ?> </h2></td>
					<td><h2 class="txt-cam"><span class="fa fa-arrow-right"></span></h2></td>
					<td><h2 class="txt-cam"> <?php echo $moneda2; ?> </h2></td>
			   </tr>
		   </table>
				<div class="col-lg-12">Debe Transferir: <b class="valor"> <?php echo $monto.' '.$der?></b></div>
				<div class="col-lg-12">Tasa de cambio: <b class="valor"><?php echo $taza?></b></div>
		   </div>
		   </span>
				<div class="box-cambio">
				 <h2 class="txt-respuesta">Recibe: <?php echo $total.' '.$der2?> </h2>
				</div>
				<div class="wrap-cuentas">
					<div class="cuentas">
					<br>
						<div class="row">
							<div class="col-lg-4"><img class="mod-log" src="img/bbvacompress.png"></div>
							<div class="col-lg-8">Continental Soles: 00110480 02002787 64<br>
								Continental Dolares: 001104800 200218112</div>
						</div>
						<div class="row">
							<div class="col-lg-4"><img class="mod-log" src="img/bcpcompress.png"></div>
							<div class="col-lg-8">BCP Dolares: 19424891 12114<br>
								BCP Soles: 19425032 74095</div>
						</div>
					
					<!--<table>
						<tr>
							<td><img class="mod-log" src="img/bbvacompress.png"></td>
							<td>
								Continental Soles: 0011 0480 0200 278764<br>
								Continental Dolares: 0011 0480 0200 2181 12
							</td>
						</tr>
						<tr>
							<td><img class="mod-log" src="img/bcpcompress.png"></td>
							<td>
								BCP Dolares: 1942 4891 12114<br>
								BCP Soles: 1942 5032 74095
							</td>
						</tr>
					</table>-->
					</div>
				</div>
			    <div class="txt-cambio2">
				<div class="col-lg-12 nota">NOTA:</div>
					Cuando realice la transferencia haga click al boton "YA TRANSFERI" y siga las instrucciones. :)
			    </div>
			   <div class="row txt-wrap txt-pref">
					<div class="col-lg-12">
						<table width="100%" border="0">
							<tr>
								<td><p class="col-dud">Dudas?</p>
						<p class="cont-dud"><span class="cont fa fa-phone"></span> 947841039 - 977469469 - 389 5829 </p>
						<p class="cont-dud"><span class="cont fa fa-envelope"></span> info@ewforex.net </p></td>
								<td align="right"><a href="datos1.php" class="btn btn-lg btn-success">Ya transferi</a></td>
							</tr>
						</table>
					</div>
			   </div>
          </div>
		  <div class="col-lg-5">
			  <div class="alert alert-info" role="alert">
				<strong>Clientes Preferenciales:</strong> Si eres cliente preferencial, puedes ir al chat o 
				enviarnos un mensaje de wastapp (947841039) y acordaremos un buen precio :)
			  </div>
		  </div>
        </div>
      </div>
	  </div>
    </header>
	<!-- Button trigger modal -->
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
