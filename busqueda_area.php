
	<?php include("body.php");?>
	<?php include("menu.php");?>
<?php

include "conecta.php";

$user_id=null;
$sql1= "select * from areas where nombre like '%$_GET[s]%' or director like '%$_GET[s]%' or telefono like '%$_GET[s]%' or correo like '%$_GET[s]%' or ubicacion like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>


<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">

<center><a href="ver_areas.php"><button type="submit" class="btn btn-primary">Regresar<br><i class="material-icons">reply</i></button></a></center>   

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>Direccion</th>
	<th>Telefono</th>

</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["director"]; ?></td>
	<td><?php echo $r["telefono"]; ?></td>
	<td><?php echo $r["correo"]; ?></td>
	<td><?php echo $r["ubicacion"]; ?></td>
		<td >
		<a href="formulario.php?id=<?php echo $r["id_area"];?>" class="btn btn-sm btn-warning">Editar<br><i class="material-icons">cached</i></a>
		<a href="#" id="del-<?php echo $r["id_area"];?>" class="btn btn-sm btn-danger">Eliminar<br><i class="material-icons">delete</i></a>
		<script>
		$("#del-"+<?php echo $r["id_area"];?>).click(function(e){
			e.preventDefault();
			p = confirm("¿Estas seguro?");
			if(p){
				window.location="eliminar.php?id="+<?php echo $r["id_area"];?>;

			}

		});
		</script>
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