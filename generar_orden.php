
	<?php include("body.php");?>
	<?php include("menu.php");?>

<?php
include "conecta.php";

$user_id=null;
$sql1= "select * from areas";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<div class="content">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
	

<div class="form-group label-floating">
<label class="control-label">Director</label>
	<input type="text" class="form-control" name="nombre" value="<?php echo $r["nombre"]; ?>">
 </div>
 
<?php while ($r=$query->fetch_array()):?>


<!----------------------------------Orden de servicio-------------------------------------------------->

<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-10">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Generar Orden de Servicio</h4>
									<p class="category">Rellena los campos</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="POST" action="guardar.php" >


	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Area</label>
													<div class="form-group">
														<select class="form-control" id="sel1">
														    <option>1</option>
														    <option>2</option>
														    <option>3</option>
														    <option>4</option>
														  </select>
														</div>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Director</label>
		<input type="text" class="form-control" value="<?php echo $r["director"]; ?>" disabled >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Telefono</label>
        <input type="text" class="form-control" value="<?php echo $r["telefono"]; ?>" disabled >
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Correo</label>
		<input type="text" class="form-control" value="<?php echo $r["correo"]; ?>" disabled>
												</div>
	                                        </div>

	                                           <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Ubicacion</label>
		<input type="text" class="form-control" value="<?php  echo $r["ubicacion"]; ?>" disabled >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Tipo de equipo</label>
														<select class="form-control" id="sel1">
														    <option>PC</option>
														    <option>Laptop</option>
														    <option>All in One</option>
														  </select>
														
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Marca</label>
														<select class="form-control" id="sel1">
														    <option>Lenovo</option>
														    <option>Compac</option>
														    <option>HP</option>
														    <option>Dell</option>
														    <option>Ensamblada</option>
														  </select>
	                                        </div>
	                                         </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Modelo</label>
													<input type="text" class="form-control" name="modelo" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Servicio o Falla</label>
													<input type="text" class="form-control" rows="2" name="servicio">
												</div>
	                                        </div>
	     								</div>
	     								<!--<div class="row">
	     									<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Observaciones</label>
													<input type="text" class="form-control" rows="2" name="observaciones">
												</div>
	                                        </div>
	                                    </div>-->

	                                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-2">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#">
    									<img class="img" src="recursos/img/faces/marc.png" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Control de Ordenes de Servicio</h6>
    								<!--<h4 class="card-title">..</h4>
    								<p class="card-content">

    								...
									</p>--><!--
    								<a href="#" class="btn btn-primary btn-round">Cerrar</a>-->
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>



<!----------------------------------Orden de servicio-------------------------------------------------->
<?php endwhile;?>

</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div>
</div>
</div>
</div>

			