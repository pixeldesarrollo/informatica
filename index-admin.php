	<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
  header("location: index.php");
  /* echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
*/
exit;
}
/*
$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado,
<a href='index.php'>Necesita Hacer Login</a>";
exit;
}
*/
?>
	
	<?php include("body.php");?>
	<?php include("menu.php");?>

	    

			<div class="content">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					<br><br><br>
					<center><img src="recursos/img/logo.png"></center>
					<center><h1>Sistema de Control de Servicios</h1></center>
					<center><h5>Dirección de informática H. Ayuntamiento de Tulum</h5></center>
					<center> <a href="ver_reportes_dia.php"><button class="btn btn-primary">Ver Reportes<br><i class="material-icons">remove_red_eye</i></button></a></center>
					</div>
				</div>
			</div>

			</div>
						


