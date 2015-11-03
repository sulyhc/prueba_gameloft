<?php 
include_once("../controller/cEmpleados.php");
$emple = new cEmpleados();
$curso = 0;
if(isset($_POST['curso'])){
	$curso = 1;
}
$emple->addCursoEmp($_POST['idemp'], $curso,  $_POST['porcentaje'],$_POST['lenguaje']);
$conoc = $emple->getConocEmp($_POST['idemp']);
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
										
				