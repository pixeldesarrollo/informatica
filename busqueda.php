<?php

include "conecta.php";

$user_id=null;
$sql1= "select * from areas where nombre like '%$_GET[s]%' or director like '%$_GET[s]%' or telefono like '%$_GET[s]%' or correo like '%$_GET[s]%' or ubicacion like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

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
	
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
