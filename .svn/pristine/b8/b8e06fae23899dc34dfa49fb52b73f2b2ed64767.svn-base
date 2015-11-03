<?php 
//script que elimina un elemento de acuerdo a los parametros deseados
// 'lugar' = ubicacion de la accion 1=empleados 2= lenguajes 3=conocimientos del empleado
switch ($_POST['lugar']) {
	case 1:
		include("../controller/cEmpleados.php");
		$emp = new cEmpleados;
		$emp->eliminaEmp($_POST['id']);
		echo "EMPLEADO ELIMINADO CON EXITO";
		break;
	case 2:
		include("../controller/cLenguajes.php");
		$leng = new cLenguajes();
		echo $leng->borraLenguaje($_POST['id']);
		break;
	case 3:
		include("../controller/cEmpleados.php");
		$emp = new cEmpleados();
		$emp->eliminaCurso($_POST['id']);
		echo "CURSO ELMINADO CON EXITO";
		break;
}
?>