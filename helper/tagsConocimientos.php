<?php
//ciclo que escribe los tags de los conocimientos
foreach($conoc as $cc){
	$st = "btn-danger";
	if($cc['curso'] == 0){
		$st = "btn-primary";
	}
	//escribe el nombre del conocimiento o lenguaje
?>
										<button id="BT<?php echo $cc['id'] ?>" onclick="modalConfirmacionDelete(<?php echo $cc['id']?>,'modalNvoEmp',3)"
											  style="margin: 3px" class="btn <?php echo $st; ?> btn-xs"><?php echo $cc['lenguaje'] ?></button>
										<?php
											}
 ?>
			