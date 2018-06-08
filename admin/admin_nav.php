<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="../index.php">
	<img id="logo-admin" src="img/logopanel.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
	  <li class="nav-item">
		<span class="nav-link disabled"><?php require_once('nombre.php');?></span>
	  </li>
	  <?php require_once('validacion.php'); 
	  	if (validacion()==true){
	  echo '<li class="nav-item">
				<a href="admin1.php" class="btn btn-danger btn-sm"> Taza </a>
	  		</li>';
}

	  ?>
	  
	</ul>

	<ul><li>
		<span class="float-right">
			<a href="../logout.php" class="btn btn-danger"> Salir </a>
		</span>
	</li></ul>
  </div>
 </div>
</nav>