<?php 
include_once("../controller/cLenguajes.php");
$lenguajes = new cLenguajes();
$lengs = $lenguajes->listaLenguajes();
$arr = $lenguajes->getNumEmpsLeng(0); //obtiene el numero de empleados por lenguaje
$arr2 = $lenguajes->getNumEmpsLeng(1); //obtiene el numero de empleados por curso
?>
<div class="row">
	<div class="col-md-10">
		<h1 class="page-header"> Cursos y Lenguajes </h1>
	</div>
	<div class="col-md-2">
		<br />
		<small>
			<button onclick="modalNvoLenguaje()" class="btn btn-success">
			Agregar Lenguaje <i class="fa fa-code"></i>
			</button> </small>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Lenguajes</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Estadisticas</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <h4>Lenguajes Registrados</h4>
                                    <div class="row">
                                    	<div class="col-md-10">
                                    		<div class="table-responsive">
                                    		<table class="table">
                                    			<thead>
                                    				<tr>
                                    					<th>#</th>
                                    					<th>Lenguaje/Conocimiento</th>
                                    					<th>Acciones</th>
                                    				</tr>
                                    			</thead>
                                    			<tbody>
                                    				<?php 
                                    				//ciclo que recorre el array de la consulta
                                    				foreach($lengs as $l){
                                    				?>
                                    				<tr class="TB<?php echo $l['id'] ?>">
                                    					<td><?php echo $l['id'] ?></td>
                                    					<td><?php echo $l['lenguaje'] ?></td>
                                    					<td>
                                    						<div class="btn-group" role="group" aria-label="...">
										<button onclick="modalVerMiembros(1,'<?php echo $l['id'] ?>','modalMLen')" type="button"  class="btn btn-primary">
											<i class="fa fa-users"></i>
										</button>
										<button onclick="modalEditLenguaje(<?php echo $l['id'] ?>)" type="button" class="btn btn-info">
											<i class="fa fa-edit"></i>
										</button>
										<button onclick="modalConfirmacionDelete(<?php echo $l['id']?>,'modalNvoLen',2)" type="button" class="btn btn-danger">
											<i class="fa fa-remove"></i>
										</button>
									</div>                                    						
                                    					</td>
                                    				</tr>
                                    	<?php } ?>
                                    			</tbody>
                                    		</table>
                                    		</div>
                                    	</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Estadisticas de Empleados</h4>
                                    <div class="row">
                                    	<div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Por Lenguaje
                        </div>
                        <div class="panel-body">
                            <div id="myfirstchart" style="height: 350px;width: 450px"></div>
                        </div>
                    </div>
                </div>
                                    	<div class="col-md-6 col-sm-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Por Curso
                        </div>
                        <div class="panel-body">
                            <div id="mysecondchart" style="height: 350px;width: 450px"></div>
                        </div>
                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>		
	</div>
</div>

<!-- Modal nuevo lenguaje -->
<div class="modal fade" id="modalNvoLen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	</div>
	
	<!-- Modal para mostrar mienbros de lenguaje -->
<div class="modal fade" id="modalMLen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	</div>

<script>
	Morris.Donut({
  element: 'myfirstchart',
  data: <?php echo json_encode($arr) ?>,
});
Morris.Donut({
  element: 'mysecondchart',
  data: <?php echo json_encode($arr2) ?>,
});
</script>