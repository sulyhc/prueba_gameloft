 <?php
include_once ("../controller/cLenguajes.php");
$lenguajes = new cLenguajes();
 ?>
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrando Conocimiento para: </h4>
      </div>
      <div class="modal-body">
      	<form id="fNvoCurso">
      		<input type="hidden" id="iddp" name="idemp" value="<?php echo $_POST['idEmp'] ?>" />
        <div class="row">
        	<div class="col-md-7">
        	<div class="form-group">
        		<label>Lenguaje/Tecnolog&iacute;a</label>
        		<select id="comboLengs" style="width: 100%" name="lenguaje" class="form-control" >
        			<?php 
        			$lengs = $lenguajes->listaLenguajes();
        			foreach($lengs as $l){
        			?>
        			<option value="<?php echo $l['id'] ?>"><?php echo $l['lenguaje'] ?></option>
        			<?php } ?>
        		</select>
        	</div>
        	</div>
        </div>
        <div class="row">
        	<div class="form-group" id="fgporcentaje">
        	<div class="col-md-5">
        		<label>Porcentaje de Avance</label>
        		<input id="porcentaje" name="porcentaje" type="number" min="0" max="100" class="form-control" onkeyup="validarInputNum('porcentaje','btnCurso')" />
        		<span id="hbporcentaje" class="help-block"></span>
        	</div>
        	</div>
        	<div class="form-group">
        	<div class="col-md-5">
        		<label>
                                                <input type="checkbox" name="curso"> ES CURSO
                                            </label>
        	</div>
        	</div>
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button id="btnCurso" type="button" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
  
<script>
	$('#comboLengs').select2();
	
	$("#btnCurso").click(function() {
		var por = validarInputNum("porcentaje","btnCurso");
		var id = $("#iddp").val();
		if(por == 1){
		regCurso("#fNvoCurso",id);}
		
	}); 
</script>