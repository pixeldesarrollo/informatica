
	<?php include("body.php");?>
	<?php include("menu.php");?>


<?php
include "conecta.php";


$sql1= "select * from problemas";
$query = $con->query($sql1);

?>



<?php if($query->num_rows>0):?>

<div class="content">
<div class="container-fluid"> 


<div class="row">
<div class="col-md-12">
<center><h3><i class="material-icons">mood</i><br> Incidencias dadas de alta</h3></center>
<form role="search" action="busqueda_problemas.php">
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
	<th><h6>Problema</h6></th>
	<th></th>
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
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div>
</div>
</div>
</div>