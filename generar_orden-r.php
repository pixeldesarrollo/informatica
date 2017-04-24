
	<?php include("body.php");?>
	<?php include("menu-r.php");?>

<?php
include "conecta.php";

$sql1= "select * from areas";
$query = $con->query($sql1);
?>


<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<center><img src="recursos/img/logo.png"></center>
<center><h1>Selecciona el área a la que perteneces</h1></center>
<center><h5>Da clic el cuadro para seleccionar tu Área</h5></center>	
  <form action="1.php" method="POST">
    <div class="form-group col-md-12">
    <div class="styled-select">
      <select style="width:100%;height:70px" name="id_area" class="textbox">
        <?php while ($r=$query->fetch_array()):?>
      	<option class="option" value="<?php echo $r['id_area']?>"><?php echo $r['nombre'];?> 
        </option>
        <?php endwhile;?>
      </select>
      </div>
   <center> <button type="submit" class="btn btn-primary ">Siguiente<br><i class="material-icons">send</i></button></center>
  </form>

 

</div>
</div>
</div>
</div>

			