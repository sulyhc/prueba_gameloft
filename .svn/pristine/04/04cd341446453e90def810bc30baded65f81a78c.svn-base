 <?php
include_once ("../controller/cEmpleados.php");
$empl = new cEmpleados();
$e = $empl->getEmple($_POST['idEmp']);
 ?>
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalles de: <?php echo $e['nombre'] ?></h4>
      </div>
      <div class="modal-body">
      	<table class="table">
      		<tr>
      			<th style="width: 30%">Nombre</th>
      			<td><?php echo $e['nombre'] ?></td>
      		</tr>
      		<tr>
      			<th>Fecha de Nacimiento</th>
      			<td><?php echo $e['fecha_nacimiento'] ?></td>
      		</tr>
      		<tr>
      			<th>Edad</th>
      			<td><?php echo $e['edad'] ?></td>
      		</tr>
      		<tr>
      			<th>Direcci&oacute;n</th>
      			<td><?php echo $e['direccion'] ?></td>
      		</tr>
      		<tr>
      			<th>Telefono</th>
      			<td><?php echo $e['telefono'] ?></td>
      		</tr>
      		<tr>
      			<th>Puesto</th>
      			<td><?php echo $e['puesto'] ?></td>
      		</tr>
      		<tr>
      			<th>Salario</th>
      			<td><?php echo $e['salario'] ?></td>
      		</tr>
      	</table>
      </div>
      </form>
      <div class="modal-footer">
        <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
  
<script>
	$("#btnCurso").click(function() {
		alert("chale");
		regCurso("#fNvoCurso");
	}); 
</script>