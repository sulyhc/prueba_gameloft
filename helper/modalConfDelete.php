 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">SOLICITANDO CONFIRMACION</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-3">
        		<img class="img-responsive" src="assets/img/danger.png" />
        	</div>
        	<div class="col-md-9">
        		<h3 style="color:red; font-weight: bold">¿DESEA ELIMINAR EL ELEMENTO SELECCIONADO?</h3>
        	</div>
        </div>
        <form id="fEliminar">
        	<input type="hidden" id="idEle" value="<?php echo $_POST['id'] ?>" />
        	<input type="hidden" id="lugar" value="<?php echo $_POST['lugar'] ?>" />
        	<input type="hidden" id="modal" value="<?php echo $_POST['modal'] ?>" />
        </form>
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button id="btnDelete" type="button" class="btn btn-danger">ELIMINAR</button>
      </div>
    </div>
  </div>
  
<script>
	$("#btnDelete").click(function() {
		var id = $("#idEle").val();
		var lug = $("#lugar").val();
		var modal = $("#modal").val();
		deleteElemento(id,lug,modal)
		});
</script>