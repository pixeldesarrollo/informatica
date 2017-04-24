<meta http-equiv="refresh" content="2;url=ver_reportes_dia.php" />
	<?php include("body.php");?>
	<?php include("menu.php");?>

<?php
include "conecta.php";



$id_tecnico = $_POST ['id_tecnico'];
$id_reporte = $_POST ['id_reporte'];

/*echo "id del tecnico: " . $id_tecnico . "<br>"; 
echo "id del reporte: " . $id_reporte;
*/



?>


<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<center><img src="recursos/img/logo.png"></center>
<center><h1><?php  
$resultados = mysqli_query($con, "SELECT * FROM tecnicos WHERE id_tecnico = $id_tecnico ");
while ($consulta = mysqli_fetch_array($resultados))
{
echo $consulta['nombre'];

}


 ?></h1></center>
<center><h5>Atendera el reporte</h5></center>	

 

</div>
</div>
</div>
</div>









<?php 



$sql = "update reportes set id_tecnico=\"$_POST[id_tecnico]\" 
			where id_reporte=".$_POST["id_reporte"];
			$query = $con->query($sql);
		
 ?>

			