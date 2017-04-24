
	<?php include("body.php");?>
	<?php include("menu.php");?>


<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
			<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-10">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Crear Área</h4>
									<p class="category">Rellena los campos</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="POST" action="guardar_area.php" >
	                                        

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nombre</label>
													<input type="text" class="form-control" rows="2" name="nombre" required>
												</div>
	                                        </div>
	     								</div>
	     								<div class="row">
	     									<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Director</label>
													<input type="text" class="form-control" rows="2" name="director" required>
												</div>
	                                        </div>
	                                    </div>
	     								<div class="row">
	     									<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Telefono</label>
													<input type="text" class="form-control" rows="2" name="telefono" required>
												</div>
	                                        </div>
	                                    </div>
	     								<div class="row">
	     									<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Correo</label>
													<input type="text" class="form-control" rows="2" name="correo" required>
												</div>
	                                        </div>
	                                    </div>
	     								<div class="row">
	     									<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Ubicación</label>
													<input type="text" class="form-control" rows="2" name="ubicacion" required>
												</div>
	                                        </div>
	                                    </div>	 	                                    	                                    
	                                    <button type="submit" class="btn btn-primary pull-right">Guardar Área<br><i class="material-icons">send</i></button>
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
