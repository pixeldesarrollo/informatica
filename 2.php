
	<?php include("body.php");?>
	<?php include("menu-r.php");?>

<?php
include "conecta.php";

$id_reporte = $_POST ['id_reporte'];
$problema = trim(htmlentities($_POST['problema'],ENT_NOQUOTES, "utf-8"));

$sql1= "select * from areas";
$query = $con->query($sql1);


?>


<?php 

$sql = "update reportes set problema='$problema' where id_reporte=".$_POST["id_reporte"];
			$query = $con->query($sql);
/*
$sql = "update reportes set problema=\"$_POST[problema]\" 
			where id_area=".$_POST["id_area"];
			$query = $con->query($sql);
*/				
 ?>

<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<center><img src="recursos/img/logo.png"></center>
<center><h1>¿Cual es tu nombre?</h1></center>	
<center><h5>Escribelo Completo</h5></center>
 <form role="search" action="3.php" method="POST">
    <div class="form-group col-md-12">
<input type="text" name="reporta" on keyup="toTitleCase()" class="reporta" placeholder="Porfavor escribe tu nombre completo" required>
<script>

 function toTitleCase(str) { return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();}); } 





</script>


    <center><button type="submit" class="btn btn-primary">Finalizar<br><i class="material-icons">send</i></button></center>
     <?php $sql2= ("SELECT MAX(id_reporte) AS id_reporte FROM reportes");

$query2 = $con->query($sql2);
?>
<?php while ($r2=$query2->fetch_array()):?>
        <input type="hidden" name="id_reporte" value="<?php echo $r2['id_reporte']?>" >
        <?php endwhile;?>
  </form>


</div>
</div>
</div>
</div>

			