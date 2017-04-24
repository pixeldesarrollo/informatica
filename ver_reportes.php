<?php include("body.php");?>
<?php include("menu-r.php");?>
<meta http-equiv="refresh" content="60;url=ver_reportes.php" />

<?php
include "conecta.php";

$estado = "Pendiente";
/*
$sql1= "select * from reportes WHERE estado='Pendiente' ORDER BY id_reporte DESC  ";
$query = $con->query($sql1);
*/
 
$sql1= "select * from reportes WHERE estado ='Pendiente' ORDER BY id_reporte DESC  ";
$query = $con->query($sql1);


function obtenerNombreTecnico($idTecnico,$con){
	$sql=$con->query("SELECT nombre FROM tecnicos WHERE id_tecnico=".$idTecnico);
	$datos=$sql->fetch_array();
	return $datos["nombre"];
}


function obtenerNombreArea($idArea,$con){
	$sql=$con->query("SELECT nombre FROM areas WHERE id_area=".$idArea);
	$datos=$sql->fetch_array();
	return $datos["nombre"];
}

?>



<?php if($query->num_rows>0):?>

<div class="content">
<div class="container-fluid"> 


<div class="row">
<div class="col-md-12">
<!--<form role="search" action="busqueda_reportes.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar" required>
<button type="submit" class="btn btn-primary"><i class="material-icons">search</i></button>      
      </div>
            
</form>
-->
<center><h3><i class="material-icons">insert_emoticon</i><br>Completar el reporte hasta que el Técnico haya Finalizado el servicio</h3></center>
</div>	
</div>



<div class="row">
<div class="col-md-12">
	

<table class="table table-bordered table-hover table-responsive">
<thead>
	<th><h6>Folio</h6></th>
	<th><h6>Area</h6></th>
	<th><h6>Fecha</h6></th>
	<th><h6>Problema</h6></th>
	<th><h6>Reporta</h6></th>
	<th><h6>Tecnico que Asistira</h6></th>
	<th><h6>Estado</h6></th>
	<th></th>
</thead>

<?php while ($r=$query->fetch_array()):?>

<tr>
	<td><?php echo $r["id_reporte"]; ?></td>
	<td><?php echo obtenerNombreArea($r["id_area"],$con); ?></td>
	<td><?php echo $r["fecha"]; ?></td>
	<td><?php echo $r["problema"]; ?></td>
	<td><?php echo $r["reporta"]; ?></td>
	<td><?php echo obtenerNombreTecnico($r["id_tecnico"],$con); ?></td>
	<td><?php echo $r["estado"]; ?></td>
	
	<td >
		<a href="formulario_completar_reporte.php?id=<?php echo $r["id_reporte"];?>" class="btn btn-sm btn-primary">Completar<br><i class="material-icons">cached</i></a>
		
	</td>
</tr>

<?php endwhile;?>
</table>


<?php else:?>
	<center><p class="alert alert-warning"><i class="material-icons">tag_faces</i><br>No hay ningun reporte que completar </p></center>
<?php endif;?>
</div>
</div>
</div>
</div>