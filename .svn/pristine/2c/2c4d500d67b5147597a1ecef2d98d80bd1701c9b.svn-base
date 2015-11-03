<?php 
include_once("../controller/cEmpleados.php");
//script que funge como alta y edicion de empleados
$emple = new cEmpleados();
//si no se ha pasado el id del empleado se trata de una alta
if(!isset($_POST['idEmp'])){
$emple->altaEmp($_POST['nempleado'], $_POST['edad'], $_POST['fnac'], $_POST['direccion'], $_POST['telefono'], $_POST['puesto'], $_POST['salario']);}
//de lo contrario se trata de una actualizacion
else{
	$emple->editEmpleado($_POST['nempleado'], $_POST['edad'], $_POST['fnac'], $_POST['direccion'], $_POST['telefono'], $_POST['puesto'], $_POST['salario'], $_POST['idEmp']);
}

?>