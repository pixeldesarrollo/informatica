
  <?php include("body.php");?>
  <?php include("menu.php");?>
<?php
include "conecta.php";

$user_id=null;
$sql1= "select * from areas where id_area = ".$_GET["id"];
$query = $con->query($sql1);
$areas = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $areas=$r;
  break;
}

  }
?>

<div class="content">
<div class="container-fluid"> 

<?php if($areas!=null):?>

<form role="form" method="post" action="actualizar.php">
  <div class="form-group">
    <label for="name">Nombre del area</label>
    <input type="text" class="form-control" value="<?php echo $areas->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="lastname">Director</label>
    <input type="text" class="form-control" value="<?php echo $areas->director; ?>" name="director" required>
  </div>
  <div class="form-group">
    <label for="address">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $areas->telefono; ?>" name="telefono" required>
  </div>
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control" value="<?php echo $areas->correo; ?>" name="correo" >
  </div>
  <div class="form-group">
    <label for="phone">Ubicacion</label>
    <input type="text" class="form-control" value="<?php echo $areas->ubicacion; ?>" name="ubicacion" >
  </div>
<input type="hidden" name="id" value="<?php echo $areas->id_area; ?>">
  <button type="submit" class="btn btn-primary">Actualizar<br><i class="material-icons">cached</i></button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
</div>  
</div>