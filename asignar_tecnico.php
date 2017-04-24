<?php include("body.php");?>
<?php include("menu.php");?>

<?php 
$id_reporte = $_POST ['id'];
/*echo $id_reporte;*/
include ('conecta.php');
$sql1= "select * from tecnicos";
$query = $con->query($sql1);

?>

<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<center><img src="recursos/img/logo.png"></center>
<center><h1>¿Quien atendera el Reporte?</h1></center> 
<center><h5>Da clic aqui en el cuadro para seleccionar al Técnico</h5></center>
  <form role="search" action="asignar_tecnico_g.php" method="POST">
    <div class="form-group col-md-12">
      <select style="width:100%;height:70px" name="id_tecnico" class="textbox">
        <?php while ($r=$query->fetch_array()):?>
        <option value="<?php echo $r['id_tecnico']?>"><?php echo $r['nombre'];  ?> 
          
        </option>   
        <?php endwhile;?>
      </select>
      
   <center> <button type="submit" class="btn btn-primary">Asignar<br><i class="material-icons">send</i></button></center>
   <input type="hidden" name="id_reporte" value="<?php echo $id_reporte; ?>">
  </form>

 

</div>
</div>
</div>
</div>

      