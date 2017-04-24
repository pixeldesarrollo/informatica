	<?php include("body.php");?>
	<?php include("menu-r.php");?>

<?php
include "conecta.php";
$destino = "androdiseno@gmail.com";
$id_area = $_POST ['id_area'];
$reporta = $_POST ['reporta'];
$estado = "Pendiente";

$contenido = "Area: " . $id_area . "\nReporta: " . $reporta ;
mail($destino, "Informática", $contenido);


$sql1= "select * from reportes";
$query = $con->query($sql1);
?>
<?php 

$sql = " update reportes set reporta='$reporta', estado='$estado' where id_area=".$_POST["id_area"];
			$query = $con->query($sql);
				
 ?>

<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<center><img src="recursos/img/logo.png"></center>
<center><h1><?php  echo $reporta; ?></h1></center>
<center><h3>Gracias tu reporte fue exitosamente recibido, uno de de los Técnicos de Informática asistira para brindarte el soporte</h3></center>
<center><h4>Seras redireccionado para completar el reporte cuando el Técnico aya finalizado el servicio</h4></center>	

</div>
</div>
</div>
</div>

<META HTTP-EQUIV=Refresh CONTENT="15; URL=ver_reportes.php">.