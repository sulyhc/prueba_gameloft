<?php 
include_once("../model/mEmpleados.php");
/**
 * clase controladora de empleados
 *
 * @package controller
 * @author  Walter
 */
class cEmpleados {
	
	private $mEmp; //objeto privado de la clase modelo de los empleados
		
	//constructor de la clase que inicia la variable global $mEmp
	function __construct(){
		$this->mEmp = new mEmpleados();
	}
	
	/**
	 * lista los empleados de acuerdo al status
	 *
	 * @return pdo Statement
	 * @author  
	 */
	function listaEmpleados($status) {
		return $this->mEmp->getEmpleados($status);		
	}
	
	/**
	 * registra un nuevo empleado
	 *
	 * @return pdo Statement
	 * @author  
	 */
	 
	 function altaEmp($nombre, $edad, $fnac, $direccion, $telefono, $puesto, $salario){
	 	$this->mEmp->regEmpleado($nombre, $edad, $fnac, $direccion, $telefono, $puesto, $salario);
	 }
	 /**
	 * registra un curso a un empleado
	 *
	 * @return void
	 * @author  
	 */
	 function addCursoEmp($idEmp, $curso, $porcentaje, $idLenguaje){
	 	$this->mEmp->regCursoEmp($idEmp, $curso, $porcentaje, $idLenguaje);
	 }
	 
	 /**
	 * obtiene los datos de un  empleado
	 *
	 * @return array
	 * @author  
	 */
	 function getEmple($idEmp){
	 	return $this->mEmp->getEmp($idEmp);
	 }
	 
	 /**
	 * obtiene los cursos de un  empleado
	 *
	 * @return array
	 * @author  
	 */
	 function getConocEmp($idEmp){
	 	return $this->mEmp->getConocimientosEmp($idEmp);
	 }
	 
	 /**
	 * edita un  empleado
	 *
	 * @return void
	 * @author  
	 */
	 function editEmpleado($nombre, $edad, $fnac, $direccion, $telefono, $puesto, $salario, $idEmp){
	 	$this->mEmp->editEmpleado($nombre, $edad, $fnac, $direccion, $telefono, $puesto, $salario, $idEmp);
	 }
	 
	 /**
	 * elimina un  empleado
	 *
	 * @return void
	 * @author  
	 */
	 function eliminaEmp($idEmp){
	 	$this->mEmp->deleteEmpleado($idEmp);
	 }
	 
	 /**
	 * elimina un curso de un empleado
	 *
	 * @return void
	 * @author  
	 */
	 function eliminaCurso($idCurso){
	 	$this->mEmp->deleteCurso($idCurso);
	 }
	 
} // END
?>