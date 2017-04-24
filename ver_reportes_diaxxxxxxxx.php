<?php include("body.php");?>
<?php include("menu.php");?>

<meta http-equiv="refresh" content="60;url=ver_reportes_dia.php" />
<?php
include "conecta.php";

/*$sql1= "select * from reportes, areas ORDER BY id_reporte DESC";
*/
$sql1= "select * from reportes WHERE estado ='Pendiente' ORDER BY id_reporte DESC";
$query = $con->query($sql1);

?>








<?php if($query->num_rows>0):?>

<div class="content">
<div class="container-fluid"> 

<div class="row">
<div class="col-md-12">
<!--<form role="search" action="busqueda_reportes_admin.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar" required>
<button type="submit" class="btn btn-primary"><i class="material-icons">search</i></button>      
      </div>
            
</form>
-->
<center><h3><i class="material-icons">mood</i><br> Reportes del día asigna al Técnico segun corresponda</h3></center>

</div>	
</div>

<div class="row">
<div class="col-md-12">
	

<table class="table table-bordered table-hover table-responsive">
<!--<thead>
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
-->

<thead>
	<th><h6>Folio</h6></th>
	<th><h6>Area</h6></th>
	<th><h6>Fecha</h6></th>
	<th><h6>Problema</h6></th>
	<th><h6>Reporta</h6></th>
	<th><h6>Tecnico que Asistira</h6></th>
	<th><h6>Estado</h6></th>
	<th><h6>Nom</h6> </th>
	<th></th>
</thead>


<?php while ($r=$query->fetch_array()):?>
$id_tecnico = $r["id_tecnico"];
<tr>
<td><?php echo $r["id_reporte"]; ?></td>
	<td><?php echo $r["id_area"]; ?></td>
	<td><?php echo $r["fecha"]; ?></td>
	<td><?php echo $r["problema"]; ?></td>
	<td><?php echo $r["reporta"]; ?></td>
	<td><?php echo $r["id_tecnico"]; ?></td>
	<td><?php echo $r["estado"]; ?></td>
	<td><?php  
$resultados = mysqli_query($con, "SELECT * FROM tecnicos ");
while ($consulta = mysqli_fetch_array($resultados))
{
echo $consulta['nombre'];

}


 ?></td>
	<td >
<form method="POST" action="asignar_tecnico.php">

<input type="hidden" name="id" value="<?php echo $r["id_reporte"]; ?>">
<button type="submit" class="btn btn-sm btn-primary"> 
 Asignar Técnico<br><i class="material-icons">account_circle</i>
</button>
</form>
		
		

	</td>
</tr>

<?php endwhile;?>
</table>


<?php else:?>
	
	<center><p class="alert alert-warning"><i class="material-icons">tag_faces</i><br>No hay ningun reporte por el momento </p></center>

<?php endif;?>
</div>
</div>
</div>
</div>