
	<?php include("body.php");?>
	<?php include("menu.php");?>


<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
			<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-10">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Crear Problemas</h4>
									<p class="category">Rellena los campos</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="POST" action="guardar_problema.php" >
	                                        

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nombre del Problema</label>
													<input type="text" class="form-control" rows="2" name="problema" required>
												</div>
	                                        </div>
	     								</div>
	     								<button type="submit" class="btn btn-primary pull-right">Guardar Problema <br><i class="material-icons">send</i></button>
	     								<div class="clearfix"></div>
	                                </form>
	     								
