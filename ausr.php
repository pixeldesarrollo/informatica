<?php include("body.php");?>
<?php include("menu.php");?>
<!DOCTYPE html>

<html lang="en">

<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
</head>

<body>

 <header>

 
 </header> 
<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
 <form action="registrar-admin.php" method="post"> 
<h3>Dar de alta un administrador</h3>
<h3>Crea cuenta</h3>
 <!--Nombre Usuario-->
<div class="row">
<div class="col-md-6">
<div class="form-group label-floating">
<label class="control-label" for="nombre">Nombre de Usuario</label>
<input type="text" class="form-control"  name="username" maxlength="32" required>
</div>
</div>
</div>

 <!--Password-->
<div class="row">
<div class="col-md-6">
<div class="form-group label-floating">
<label class="control-label" for="nombre">Contraseña</label>
<input type="text" class="form-control"  type="password" name="password" maxlength="20" required>
</div>
</div>
</div>

 <br/><br/>

 <button type="submit" name="submit"  value="Registrar" class="btn btn-primary">Registrar<br><i class="material-icons">send</i></button>

 <!--<input type="reset" name="clear" value="Borrar" class="btn btn-primary">
-->
 </form>
 </div>  
</div>
 </div>  
</div>
 </body>
</html>