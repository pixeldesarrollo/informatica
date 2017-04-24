
  <?php include("body.php");?>
  <?php include("menu-r.php");?>
<?php
include "conecta.php";


$sql1= "select * from reportes where id_reporte = ".$_GET["id"];
$query = $con->query($sql1);

if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $reportes=$r;
  break;
}

  }
?>

<div class="content">
<div class="container-fluid"> 

<?php if($reportes!=null):?>

<form role="form" method="post" action="actualizar_reporte.php">
<div class="form-group">
<label for="name">Tipo de equipo</label>
<select class="form-control" name="tipo">
<option value="Ninguno">Clic aqui para seleccionar</option>
  <option value="PC">PC</option>
  <option value="Laptop">Laptop</option>
  <option value="Todo en Uno">Todo en Uno</option>
  <option value="Ensamblada">Ensamblada</option>
</select>
<!--
    <label for="name">Tipo de equipo</label>
    <input type="text" class="form-control" value="<?php echo $reportes->tipo; ?>" name="tipo" required>-->
  </div>
<div class="form-group">
<label for="name">Marca</label>
<select class="form-control" name="marca">
<option value="Ninguno">Clic aqui para seleccionar</option>
  <option value="HP">HP</option>
  <option value="Compac">Compac</option>
  <option value="Lenovo">Lenovo</option>
  <option value="Acer">Acer</option>
</select>
     <!-- <label for="marca">Marca</label>
    <input type="text" class="form-control" value="<?php echo $reportes->marca; ?>" name="marca" required>




-->
  </div>
  <div class="form-group">
    <label for="address">Modelo</label>
    <input type="text" class="form-control" value="<?php echo $reportes->modelo; ?>" name="modelo" required>
  </div>
  <div class="form-group">
    <label for="email">Observaciones</label>
    <input type="text" class="form-control" value="<?php echo $reportes->observaciones; ?>" name="observaciones" required>
  </div>
  <!--
  <div class="form-group">
    <label for="phone">Estado</label>
    <input type="text" class="form-control" value="<?php echo $reportes->estado; ?>" name="estado" required>
  </div>
  -->
<input type="hidden" name="id" value="<?php echo $reportes->id_reporte; ?>">
  <button type="submit" class="btn btn-primary">Finalizar reporte<br><i class="material-icons">cached</i></button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
</div>  
</div>