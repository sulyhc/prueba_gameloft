<?php
//modal que permite ver las estadisticas de cursos de un empleado
include_once ("../controller/cEmpleados.php");
$emps = new cEmpleados();
$conoc = $emps -> getConocEmp($_POST['id']); //obtiene los datos del sistema
?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">REVISANDO ESTADISTICAS</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<?php
        		//ciclo que recaba la informacion del avance en cuanto a conocimientos
        		foreach($conoc as $cn){
        			//define el color de acuerdo si es curso o lenguaje
        			//si es curso
        			if($cn['curso']==1){
        				$lb = "danger";
						$eti = "CURSO DE ";
        			}
        			//si es lenguaje o tecnolia
        			else{
        				$lb = "primary";
						$eti = "LENGUAJE/TECNOLOGÍA ";
        			}
        		 ?>
        		<div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $eti. $cn['lenguaje'] ?> 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress progress-striped active">
  						<div class="progress-bar progress-bar-<?php echo $lb ?>" role="progressbar" aria-valuenow="<?php echo $cn['porcentaje'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $cn['porcentaje'] ?>%">
    					<span class=""><?php echo "CONOCIMIENTO DE ". $cn['porcentaje']."%" ?></span>
  						</div>
						</div>
                            </div>
                            </div>
                            <?php } ?>
        	</div>
      </div>
      
      <div class="modal-footer">
        <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>