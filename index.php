<?php 
header('Cache-Control: no cache'); //no cache
session_start();
require_once("tipocambio.php");

if(isset($_SESSION['log_user_id'])){
	$link = "cambio.php";
}else{
	$link = "inicio.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('head.php');?>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://ewforex.net/blog/">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#guia">Guia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#legales">Legales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#forex">Forex</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
            </li>
			<?php 
			if(isset($_SESSION['log_user_id'])){
				echo '<li class="nav-item">
              <a class="btn btn-md btn-info" href="admin/index.php">Admin</a>
            </li>
			<li class="nav-item">
              <a class="btn btn-md btn-danger" href="logout.php">Salir</a>
            </li>';
			}else{
				echo '<li class="nav-item">
              <a class="btn btn-md btn-success" href="inicio.php">Iniciar Session</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-md btn-info" href="registro.php">Registrate</a>
            </li>';
			}
			?>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead text-center text-white d-flex">
		<div class="marg-top transp" id="transp">
			<div class="container cabecera my-auto">
				<div class="row">
					<div class="col-lg-6 mx-auto logo">
						<img src="img/logo.png"></img><br>
						<h2 class="slogan">
						  <strong class="">Cambie con seguridad!</strong>
						</h2>
						<p>Compra y venta de todo tipo de moneda Nacional y Extranjera.</p>
						<hr>
						<div class="descrip">
							<h4>Cambios En Efectivo</h4>
							<p>Horario de atención:<br>
							Lunes a viernes: 9:00 am. a 6:pm.<br>
							Sábado: 9:00 am a 3:00 pm.<br><br>
							Av. Del Ejercito 768 Miraflores - Lima - Perú<br>
							Teléfonos:
							947841039 -
							977469469 -
							389 5829</p>
						</div>
					</div>
					<div class="col-lg-6">
						<h3>Cambios Online</h3>
						<form method="POST" action="<?php echo $link?>" class="calculadora">
							<p>Dolar Perú Compra: <?php echo $compra?>/s - Venta: <?php echo $venta?>/s</p>
							<?php require_once('calculadora.php'); ?>
							<div class="col-lg-12" >
								<a onclick="calcular()" class="btn btn-lg btn-info">calcular</a>
								<input value="Operar" type="submit" class="btn btn-lg btn-success">
							</div>
						</form>
						
						<div class="row">
							<b class="nb">Nuestros Bancos</b>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6 mb-4">
							  <a href="#">
								<img class="img-fluid" src="img/scotiacompress.png" alt="">
							  </a>
							</div>
							<div class="col-md-3 col-sm-6 mb-4">
							  <a href="#">
								<img class="img-fluid" src="img/bcpcompress.png" alt="">
							  </a>
							</div>
							<div class="col-md-3 col-sm-6 mb-4">
							  <a href="#">
								<img class="img-fluid" src="img/bbvacompress.png" alt="">
							  </a>
							</div>
							<div class="col-md-3 col-sm-6 mb-4">
							  <a href="#">
								<img class="img-fluid" src="img/intercompress.jpg" alt="">
							  </a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<a href="https://www.facebook.com/Ewforex-373921403102690/"><img id="fotod" src="img/fb.png"></a>
								<a href="https://twitter.com/ewforex1"><img id="fotod" src="img/tw.png"></a>
								<a href="#"><img id="fotod" src="img/gp.png"></a>
								<a href="http://ewforex.net/blog/"><img id="fotod" src="img/wp.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
    <div class="bg-azul" id="nosotros">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Nosotros</h2>
            <hr class="light my-4">
            <p class="nosotros-text mb-4">
				Somos una casa de cambio que compra y vende todas las divisas, Dólares, Euro, Yen, Peso Chileno y Real. Mediante nuestra plataforma online solo manejamos el cambio de Dólares y Soles, las tasas como todas cambian constantemente de acuerdo al mercado local y global.  
				<br><br>
				Para nuestros clientes que intercambian más de 1000 USD, tenemos un precio preferencial. Por favor regístrese en nuestro sistema y podrá gozar de los beneficios que EWFOREX le ofrece.
				<br><br>				
				La información proporcionada por nuestros clientes es totalmente confidencia y solo es usada para realizar operaciones cambiarias.
				<br><br>
				Nuestro sistema de cambio es totalmente seguro ya que trabajamos directamente con los bancos sin intermediarios, en nuestra plataforma no manejamos ningún tipo de moneda asi que su dinero esta totalmente asegurado con nosotros.
				<br><br>
				Para intercambiar dinero, puedes realizarlo desde la comodidad de tu casa o venir a nuestra sucursal. Nuestra ubicación en Av Del Ejercito 768 Miraflores es un lugar seguro para que usted pueda Cambiar su moneda sin preocupaciones.
				<br><br>
			</p>
          </div>
        </div>
      </div>
    </div>
	<div class="bg-pasos" id="guia">
		<div class="transp-bk">
		  <div class="container text-center ">
			<h2 class="pasos mb-4">Como cambiar divisas con EWForex</h2><hr><br>
				<div class="row">
					<div class="col-lg-3">
						<span class="p1 fa fa-handshake-o fa-4x mb-3 sr-contact ">
						1<h4 class="pasos-pic">Cotiza tu moneda</h4>
					</div>
					<div class="col-lg-3">
						<span class="p2 fa fa-mail-forward fa-4x mb-3 sr-contact ">
						2<h4>Transfiere o Deposita</h4>
					</div>
					<div class="col-lg-3">
						<span class="p3 fa fa-laptop  fa-4x mb-3 sr-contact ">
						3<h4>Registra el Deposito</h4>
					</div>
					<div class="col-lg-3">
						<span class="p4 fa fa-check fa-4x mb-3 sr-contact ">
						4<h4>Abonamos el Dinero</h4>
					</div>
				</div><br><br><br><br>
				<div class="row">
					<div class="col-lg-12">
						<a href="#page-top" class="btn btn-lg btn-success navbar-brand js-scroll-trigger">Quiero Cambiar!</a>
					</div>
				</div>
		    </div><br>
	    </div>
    </div>
    <section id="legales">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading txt-serv">Cumplimos con Ordenanza:</h2>
			<h5 class="section-heading txt-serv">Razon Social: Raul Fernando Luna Toro</h5>
			<h5 class="section-heading txt-serv">Ruc: 10064782261 <h5>
            <hr class="my-3 btn-info">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img class="orden" src="img/sbs.png">
              <h3 class="mb-3 txt-serv"></h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img class="orden" src="img/indecopi.png">
              <h3 class="mb-3 txt-serv"></h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
        </div>
      </div>
    </section>

 <section class="p-0" id="forex">
	<h1 class="info-divisas">Informacion sobre divisas</h1>
      <div class="container-fluid p-0">
	  
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <iframe width="100%" height="315" src="https://youtube.com/embed/0Z8emmTt3Kg" allowfullscreen></iframe>
		  </div>
		  <div class="col-lg-4 col-sm-6">   			
            <iframe width="100%" height="315" src="https://youtube.com/embed/aOwbk_HkueA" allowfullscreen></iframe>
		  </div>
		  <div class="col-lg-4 col-sm-6">
            <iframe width="100%" height="315" src="https://youtube.com/embed/_CkXl-rYsgc" allowfullscreen></iframe>
		  </div>
		  <div class="col-lg-4 col-sm-6">
            <iframe width="100%" height="315" src="https://youtube.com/embed/W-cfJF97coA" allowfullscreen></iframe>
		  </div>
		  <div class="col-lg-4 col-sm-6">
            <iframe width="100%" height="315" src="https://youtube.com/embed/1TaoCKOM2rU" allowfullscreen></iframe>
		  </div>
		  <div class="col-lg-4 col-sm-6">
            <iframe width="100%" height="315" src="https://youtube.com/embed/eBNME9QwqzI" allowfullscreen></iframe>
		  </div>
        </div>
      </div>
    </section>
    <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="contacto-tit  ssection-heading">Contactanos</h2><hr class="btn-info">
            <p class="mb-5 cont-c">Siéntase libre de contactarnos, si tiene alguna duda la responderemos al la brevedad</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p class="cont-c">947841039 - 977469469 - 389 5829</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a class="cont-c" href="mailto:your-email@your-domain.com">info@ewforex.net</a>
            </p>
          </div>
        </div>
      </div><br><br><br><br>
    </section>
	<div class="footer">
		<div class="row">
			<div class="col-lg-12">
				<span class="txt-footer"><a class="txt-footer" href="https://www.ewforex.net/">©www.ewforex.net </a>| Todos los derechos reservados</span>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
     <script src="js/ewforex.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
