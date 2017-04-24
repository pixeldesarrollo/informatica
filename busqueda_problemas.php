
	<?php include("body.php");?>
	<?php include("menu.php");?>
<?php

include "conecta.php";

$sql1= "select * from problemas where problema like '%$_GET[s]%'";
$query = $con->query($sql1);
?>


<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">

<center><a href="ver_problemas.php"><button type="submit" class="btn btn-primary">Regresar<br><i class="material-icons">reply</i></button></a></center>   

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Problemas</th>

</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["problema"]; ?></td>
	<td >
		<a href="formulario_problema.php?id=<?php echo $r["id_problema"];?>" class="btn btn-sm btn-warning">Editar<br><i class="material-icons">cached</i></a>
		<a href="#" id="del-<?php echo $r["id_problema"];?>" class="btn btn-sm btn-danger">Eliminar<br><i class="material-icons">delete</i></a>
		<script>
		$("#del-"+<?php echo $r["id_problema"];?>).click(function(e){
			e.preventDefault();
			p = confirm("¿Estas seguro?");
			if(p){
				window.location="eliminar_problema.php?id="+<?php echo $r["id_problema"];?>;

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