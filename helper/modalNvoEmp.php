<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Registrar Nuevo Empleado</h4>
		</div>
		<div class="modal-body">
			<form id="formNvoEmp">
			<div class="row">
				<!-- nombre-->
				<div class="col-md-7">
					<div class="form-group" id="fgnempleado">
						<label for="nempleado" class="control-label">Nombre(s)</label>
						<input name="nempleado" class="form-control" id="nempleado" aria-describedby="hbnempleado" />
						<span id="hbnempleado" class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- fecha de nacimiento-->
				<div class="col-md-6">
					<div class="form-group" id="fgfnac">
						<label for="fnac" class="control-label">Fecha de Nacimiento</label>
						<input id="fnac" name="fnac" class="form-control" aria-describedby="hbfnac" />
						<span class="help-block" id="hbfnac"></span>
					</div>
				</div>
				<!-- edad-->
				<div class="col-md-6">
					<div class="form-group" id="fgedad">
						<label class="control-label" for="edad">Edad</label>
						<input onkeyup="validarInputNum('edad','btnNvoEmp')" id="edad" name="edad" type="number" class="form-control" aria-describedby="hbedad" />
						<span id="hbedad" class="help-block"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="form-group" id="fgdireccion">
						<label for="direccion" class="control-label">Direccion</label>
						<textarea name="direccion" id="direccion" class="form-control" aria-describedby="hbtelefono" ></textarea>
						<span class="help-block" id="hbdireccion"></span>
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group" id="fgtelefono">
						<label for="telefono" class="control-label">Telefono</label>
						<input name="telefono" class="form-control" id="telefono" aria-describedby="hbtelefono" />
						<span class="help-block" id="hbtelefono"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group" id="fgpuesto">
						<label class="control-label" for="puesto">Puesto</label>
						<input id="puesto" name="puesto" class="form-control" aria-describedby="hbpuesto" />
						<span id="hbpuesto" class="help-block"></span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group" id="fgsalario">
						<label for="salario" class="control-label">Salario</label>
						<input type="number" onkeyup="validarInputNum('salario','btnNvoEmp')" id="salario" name="salario" class="form-control" aria-describedby="hbsalario" />
						<span id="hbsalario" class="help-block"></span>
					</div>
				</div>
			</div>
		</div>
		</form>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">
				Cancelar
			</button>
			<button id="btnNvoEmp" type="button" class="btn btn-primary">
				Registrar
			</button>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<script>
//evento del boton registrar
	$("#btnNvoEmp").click(function() {
		//checa validaciones
		var nom = validarVacio('nempleado','btnNvoEmp');
		var fn = validarVacio('fnac','btnNvoEmp');
		var dir = validarVacio('direccion','btnNvoEmp');
		var tf = validarVacio('telefono','btnNvoEmp');
		var pu = validarVacio('puesto','btnNvoEmp');
		var ed = validarInputNum('edad','btnNvoEmp');
		var sal = validarInputNum('salario','btnNvoEmp');
		//compaqra si no hay un dato invalido
		//si no hay un dato invalido se guarda el formulario
		if(nom == 1 && fn == 1 && dir == 1 && tf == 1 && pu == 1 && ed == 1 && sal == 1){
			regNvoEmp('formNvoEmp');
		}
		});
		
		//inicia el datepicker
		jQuery('#fnac').datetimepicker({
 lang:'es',
 i18n:{
  es:{
   months:[
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre',
   ],
   dayOfWeek:[
    "Lun.", "Mar", "Mier", "Ju", 
    "Vier", "Sab", "Dom.",
   ]
  }
 },
 timepicker:false,
 format:'Y-m-d'
});

//calcula la edad
$("#fnac").change(function() {
	var fnac = $("#fnac").val();
	calculaEdad(fnac);
	});
</script>