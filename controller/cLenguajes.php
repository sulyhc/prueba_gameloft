<?php
include_once("../model/mLenguajes.php"); 
/**
 * controlador para la gestion de lenguajes 
 *
 * @package controller
 * @author  WALTER
 */
class cLenguajes {
	
	private $mLeng ;
	
	//constructor que inicia las variables privadas
	function __construct(){
		$this->mLeng = new mLenguajes();
	}
	
	/**
	 * registra un nuevo lenguaje
	 *
	 * @return void
	 * @author  
	 */
	function altaLenguaje($lenguaje) {
		$this->mLeng->addLenguaje($lenguaje);
	}
	
	/**
	 * lista todos los  lenguajes registrados
	 *
	 * @return array
	 * @author  
	 */	
	function listaLenguajes(){
		return $this->mLeng->getLenguajes();
	}
	
	/**
	 * borra un  lenguaje
	 *
	 * @return int
	 * @author  
	 */
	function borraLenguaje($idLeng){
		return $this->mLeng->removeLenguaje($idLeng);
	}
	
	/**
	 * obtiene los datos de un lenguaje
	 *
	 * @return array
	 * @author  
	 */
	function getLengu($id){
		return $this->mLeng->getLeng($id);
	}
	
	/**
	 * edita un lenguaje
	 *
	 * @return void
	 * @author  
	 */
	function editLeng($id,$lenguaje){
		$this->mLeng->editLeng($id, $lenguaje);
	}
	
	/**
	 * obtiene los empleados pertenecientes a un lenguaje
	 *
	 * @return array
	 * @author  
	 */
	function getEmps($id, $tipo){
		return $this->mLeng->getEmps($id, $tipo);
	}
	
	/**
	 * obtiene el numero de empleados por lenguaje para el grafico
	 *
	 * @return array
	 * @author  
	 */
	function getNumEmpsLeng($tipo){
		return $this->mLeng->getNumsConoc($tipo);
	}
	
} // END
?>