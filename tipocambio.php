<?php

require_once('conn.php');
$mysqli=mysqli_connect($servername,$username,$password,$dbname);
$query = "SELECT * FROM tipos";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($result);
$compra = $row[2];
$venta = $row[1];
$_SESSION['compra']= $compra;
$_SESSION['venta']= $venta;

?>

<input type="hidden" id="compra" value="<?php echo $compra?>"></input>
<input type="hidden" id="venta" value="<?php echo $venta?>"></input>
<script> 
compra = document.getElementById('compra').value;
venta = document.getElementById('venta').value;

</script>