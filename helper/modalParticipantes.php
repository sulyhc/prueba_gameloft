<?php 
//modal dinamico que muestra los participantes de un curso/lenguaje o que ocupan un determinado puesto
//$_POST['tipo] variable para determinar si se quiere ver un curso o un puesto
// tipo = 1 para cursos , tipo = 2 para puestos

$titulo = "LISTANDO EMPLEADOS";
if($_POST['tipo'] == 2 || $_POST['tipo'] == '2'){
	include("../controller/cPuestos.php");
	$pu = new cPuestos();
	$arra = $pu->listaEmpePuesto($_POST['id']);
}else{
	include("../controller/cLenguajes.php");
	$lengs = new cLenguajes();
	$arra = $lengs->getEmps($_POST['id'],0);
}
?>

 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $titulo ?></h4>
      </div>
      <div class="modal-body">
        <div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 25%">ID</th>
						<th>Nombre</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach($arra as $ar){
					?>
					<tr>
						<td><?php echo $ar['id'] ?></td>
						<td><?php echo $ar['nombre'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
        </div>
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>