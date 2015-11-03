<?php 
include_once("../model/mPuestos.php");
/**
 * clase controladora de los puestos
 *
 * @package controller
 * @author  Walter
 */
class cPuestos {
	
	private $mPuesto;
	
	//constructor 
	function __construct(){
		$this->mPuesto = new mPuestos();
	}
	
	/**
	 * lista los puestos registrados
	 *
	 * @return array
	 * @author  
	 */
	function listaPuestos(){
		return $this->mPuesto->getPuestos();
	}
	
	/**
	 * obtiene los empleados por puesto
	 *
	 * @return array
	 * @author  
	 */
	function listaEmpePuesto($puesto){
		return $this->mPuesto->getEmplePuesto($puesto);
	}
	
} // END
?>