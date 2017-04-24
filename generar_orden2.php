
	<?php include("body.php");?>
	<?php include("menu.php");?>



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
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Fecha</label>
													<input type="fecha" class="form-control" id="fecha" value="<?php
													echo date ("m/d/y"); ?>" disabled>

												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Hora</label>
													<input type="text" class="form-control" value="<?php echo strftime("%H:%M");?>" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">No. Orden</label>
													<input type="email" class="form-control" disabled>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Areas</label>
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
													<label class="control-label">Dependencia</label>
													<input type="text" class="form-control" disabled >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Nombre</label>
													<input type="text" class="form-control" disabled>
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Telefono</label>
													<input type="text" class="form-control" disabled>
												</div>
	                                        </div>
	                                           <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Ubicacion</label>
													<input type="text" class="form-control" disabled >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Tipo de equipo</label>
													<input type="text" class="form-control" name="tipo" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Marca</label>
													<input type="text" class="form-control" name="marca" >
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
	     								<div class="row">
	     									<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Observaciones</label>
													<input type="text" class="form-control" rows="2" name="observaciones">
												</div>
	                                        </div>
	                                    </div>

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
