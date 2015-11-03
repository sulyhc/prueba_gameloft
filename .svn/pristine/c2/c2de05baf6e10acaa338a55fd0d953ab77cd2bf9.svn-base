<?php 
include_once("../controller/cPuestos.php");
$puesto = new cPuestos();
$lpuestos = $puesto->listaPuestos();
?>
<div class="row">
	<div class="col-md-10">
		<h1 class="page-header"> Puestos </h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Puestos</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <h4>Puestos Registrados</h4>
                                    <div class="row">
                                    	<div class="col-md-10">
                                    		<div class="table-responsive">
                                    		<table class="table">
                                    			<thead>
                                    				<tr>
                                    					<th>#</th>
                                    					<th>Puesto</th>
                                    					<th>No Empleados</th>
                                    					<th>Ver</th>
                                    				</tr>
                                    			</thead>
                                    			<tbody>
                                    				<?php 
                                    				$i = 1;
                                    				foreach ($lpuestos as $l) {
														
													
                                    				?>
                                    				<tr>
                                    					<td><?php echo $i++ ?></td>
                                    					<td><?php echo $l['puesto'] ?></td>
                                    					<td><?php echo $l['numer'] ?></td>
                                    					<td>
                                    						<div class="btn-group" role="group" aria-label="...">
										<button onclick="modalVerMiembros(2,'<?php echo $l['puesto'] ?>','modalParti')" type="button" class="btn btn-primary">
											<i class="fa fa-users"></i>
										</button>
									</div>                                    						
                                    					</td>
                                    				</tr>
                                    				<?php }  ?>
                                    			</tbody>
                                    		</table>
                                    		</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>		
	</div>
</div>
<div class="modal fade" id="modalParti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>