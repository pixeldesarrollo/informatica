	<?php include("body.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Login</title></head>
<body>
<div>

</div>



			<div class="content">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					<br><br><br>
					<center><img src="recursos/img/logo.png"></center>
					<center><h1>Sistema de Control de Servicios</h1></center>
					<center><h5>Dirección de informática H. Ayuntamiento de Tulum</h5></center>
						<center>
					
					</div>
				</div>
			</div>

			</div>
						


			<div class="content">
			<div class="container">	
			<div class="row">		
			<div class="col-md-3"></div>
			<form method="POST" action="checklogin.php">
			<div class="form-group label-floating col-md-3">
			<label class="control-label">Nombre de usuario</label>
			<input type="text" name="username" id="username" class="form-control" rows="2"  required>
			</div>
			<div class="form-group label-floating col-md-3">
			<label class="control-label">Contraseña</label>
			<input type="password" name="password" id="password" class="form-control" rows="2" required>

			</div>
			
			<div class="col-md-3"></div>
<div class=" container">
<div class="row">
<div class="col-md-12"><center><button class="btn btn-primary" type="submit" name="Submit" value="LOGIN">Inicar Sesion<br><i class="material-icons">send</i></button></center></div>
</div>	
</div>
</form>

			</div>
			</div>
			</div>



<br>
			

</body>
</html>