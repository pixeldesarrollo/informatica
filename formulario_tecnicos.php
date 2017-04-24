
  <?php include("body.php");?>
  <?php include("menu.php");?>
<?php
include "conecta.php";


$sql1= "select * from tecnicos where id_tecnico = ".$_GET["id"];
$query = $con->query($sql1);
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $tecnicos=$r;
  break;
}

  }
?>

<div class="content">
<div class="container-fluid"> 

<?php if($tecnicos!=null):?>

<form role="form" method="post" action="actualizar_tecnico.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $tecnicos->nombre; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="lastname">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $tecnicos->telefono; ?>" name="telefono" required>
  </div>
  <div class="form-group">
    <label for="address">Correo</label>
    <input type="text" class="form-control" value="<?php echo $tecnicos->correo; ?>" name="correo" required>
  </div>
  
<input type="hidden" name="id" value="<?php echo $tecnicos->id_tecnico; ?>">
  <button type="submit" class="btn btn-primary">Actualizar<br><i class="material-icons">cached</i></button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
</div>  
</div>