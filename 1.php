<?php include("body.php");?>
<?php include("menu-r.php");?>

<?php 
$id_area = $_POST ['id_area'];

include ('conecta.php');

$insertar = "INSERT INTO reportes (id_area) VALUES ('$id_area')";
$ejecutar = mysqli_query($con, $insertar);

?>


<?php
include "conecta.php";

$sql1= "select * from problemas";
$query = $con->query($sql1);
?>




<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<center><img src="recursos/img/logo.png"></center>
<center><h1>¿Cual es el problema?</h1></center>	
<center><h5>Da clic aqui en el cuadro para seleccionar cual es el problema</h5></center>
  <form role="search" action="2.php" method="POST">
    <div class="form-group col-md-12">
    <div class="styled-select">
      <select style="width:100%;height:70px" name="problema" class="textbox">
        <?php while ($r=$query->fetch_array()):?>
        <option value="<?php echo $r['problema']?>"><?php echo $r['problema'];  ?> 
        </option>
        <?php endwhile;?>
      </select>
      </div>
      <input type="hidden" name="id_area" value="<?php echo $id_area; ?>"> 
   <center> <button type="submit" class="btn btn-primary">Siguiente<br><i class="material-icons">send</i></button></center>

<?php $sql2= ("SELECT MAX(id_reporte) AS id_reporte FROM reportes");

$query2 = $con->query($sql2);
?>
<?php while ($r2=$query2->fetch_array()):?>
        <input type="hidden" name="id_reporte" value="<?php echo $r2['id_reporte']?>">
        <?php endwhile;?>





  </form>

 

</div>
</div>
</div>
</div>

			