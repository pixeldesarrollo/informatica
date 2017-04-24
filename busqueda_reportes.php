
	<?php include("body.php");?>
	<?php include("menu-r.php");?>
<?php

include "conecta.php";

$user_id=null;
$sql1= "select * from reportes where reporta like '%$_GET[s]%' or problema like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>


<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<!--
<center><a href="ver_reportes.php"><button type="submit" class="btn btn-primary">Regresar<br><i class="material-icons">reply</i></button></a></center>   
-->
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th><h6>Folio</h6></th>
	<th><h6>Area</h6></th>
	<th><h6>Fecha</h6></th>
	<th><h6>Tipo</h6></th>
	<th><h6>Marca</h6></th>
	<th><h6>Modelo</h6></th>
	<th><h6>Problema</h6></th>
	<th><h6>Reporta</h6></th>
	<th><h6>Observaciones</h6></th>
	<th><h6>Estado</h6></th>
	<th><h6>Tecnico</h6></th>
	<th></th>

</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["id_reporte"]; ?></td>
	<td><?php echo $r["id_area"]; ?></td>
	<td><?php echo $r["fecha"]; ?></td>
	<td><?php echo $r["tipo"]; ?></td>
	<td><?php echo $r["marca"]; ?></td>
	<td><?php echo $r["modelo"]; ?></td>
	<td><?php echo $r["problema"]; ?></td>
	<td><?php echo $r["reporta"]; ?></td>
	<td><?php echo $r["observaciones"]; ?></td>
	<td><?php echo $r["estado"]; ?></td>
	<td><?php echo $r["id_tecnico"]; ?></td>
	<td >
		<a href="formulario_completar_reporte.php?id=<?php echo $r["id_reporte"];?>" class="btn btn-sm btn-primary">Completar<br><i class="material-icons">cached</i></a>
		
	</td>

	
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-danger">No hay resultados</p>
<?php endif;?>
</div>
</div>
</div>
</div>