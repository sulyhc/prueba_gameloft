<?php 

/**
 * clase modelo que agrega y gestiona los cursos a los empleados
 *
 * @package model
 * @author  Walter
 */
class mCursos {
	/**
	 * elimina los cursos  de un empleado
	 *
	 * @return void
	 * @author  
	 */
	function deleteAllCursosEmp($idEmp) {
		$query = "delete from tbl_conocimientos where tbl_empleado_id= $idEmp";
		$con = conn();
		$con->exec($query);
	}
	
	/**
	 * elimina un curso  de un empleado
	 *
	 * @return void
	 * @author  
	 */
	function deleteCursosEmp($idCurso) {
		$query = "delete from tbl_conocimientos where id= $idCurso";
		$con = conn();
		$con->exec($query);
	}
	
	/**
	 * registra un curso a un empleado
	 *
	 * @return void
	 * @author  
	 */
	function regCursoEmp($idEmp,$curso,$porcentaje,$idLenguaje){
		$query = "insert into tbl_conocimientos (curso,porcentaje,tbl_empleado_id,tbl_lenguajes_id)
					values($curso,$porcentaje, $idEmp, $idLenguaje )";
		$con = conn();
		$con->exec($query);
	}
} // END?>