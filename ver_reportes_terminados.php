<?php include("body.php");?>
<?php include("menu.php");?>

<meta http-equiv="refresh" content="60;url=ver_reportes_terminados.php" />
<?php
include "conecta.php";

/*$sql1= "select * from reportes, areas ORDER BY id_reporte DESC";
*/
$sql1= "select * from reportes WHERE estado ='Terminado' ORDER BY id_reporte DESC";
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
<center><h3><i class="material-icons">mood</i><br> Reportes Terminados</h3></center>

<form role="search" action="busqueda_reportes_admin.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar" required>
<button type="submit" class="btn btn-primary"><i class="material-icons">search</i></button>      
      </div>
            
</form>

</div>	
</div>

<div class="row">
<div class="col-md-12">
	

<table class="table table-bordered table-hover table-responsive">
<thead>
	<!--<th><h6>Folio</h6></th>-->
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
	<!--<td><?php echo $r["id_reporte"]; ?></td>-->
	<td><?php echo obtenerNombreArea($r["id_area"],$con); ?></td>
	<td><?php echo $r["fecha"]; ?></td>
	<td><?php echo $r["tipo"]; ?></td>
	<td><?php echo $r["marca"]; ?></td>
	<td><?php echo $r["modelo"]; ?></td>
	<td><?php echo $r["problema"]; ?></td>
	<td><?php echo $r["reporta"]; ?></td>
	<td><?php echo $r["observaciones"]; ?></td>
	<td><?php echo $r["estado"]; ?></td>
	<td><?php echo obtenerNombreTecnico($r["id_tecnico"],$con); ?></td>
		<td >
		<!--<a href="formulario_tecnicos.php?id=<?php echo $r["id_tecnico"];?>" class="btn btn-sm btn-warning">Editar<br><i class="material-icons">cached</i></a>-->
		<a href="#" id="del-<?php echo $r["id_reporte"];?>" class="btn btn-sm btn-danger">Eliminar<br><i class="material-icons">delete</i></a>
		<script>
		$("#del-"+<?php echo $r["id_reporte"];?>).click(function(e){
			e.preventDefault();
			p = confirm("¿Estas seguro?");
			if(p){
				window.location="eliminar_reporte.php?id="+<?php echo $r["id_reporte"];?>;

			}

		});
		</script>
	</td>
</tr>

<?php endwhile;?>
</table>


<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div>
</div>
</div>
</div>
