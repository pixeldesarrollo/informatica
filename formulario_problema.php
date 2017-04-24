
  <?php include("body.php");?>
  <?php include("menu.php");?>
<?php
include "conecta.php";


$sql1= "select * from problemas where id_problema = ".$_GET["id"];
$query = $con->query($sql1);
$problemas = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $problemas=$r;
  break;
}

  }
?>

<div class="content">
<div class="container-fluid"> 

<?php if($problemas!=null):?>

<form role="form" method="post" action="actualizar_problema.php">
  <div class="form-group">
    <label for="name">Nombre del problema</label>
    <input type="text" class="form-control" value="<?php echo $problemas->problema; ?>" name="problema" required>
  </div>
  
<input type="hidden" name="id" value="<?php echo $problemas->id_problema; ?>">
  <button type="submit" class="btn btn-primary">Actualizar<br><i class="material-icons">cached</i></button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
</div>  
</div>