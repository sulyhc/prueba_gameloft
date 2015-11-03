<?php
include_once ("Database.php");
/**
 * clase que gestiona los lenguajes de programacion y tecnologias manejadas en los cursos
 *
 * @package model
 * @author  Walter
 */
class mLenguajes {

	/**
	 * agrega un nuevo lenguaje
	 *
	 * @return void
	 * @author
	 */
	function addLenguaje($lenguaje) {
		$query = "insert into tbl_lenguajes (lenguaje) values('$lenguaje')";
		$con = conn();
		$con -> exec($query);
	}

	/**
	 * elimina un lenguaje extistente
	 *
	 * @return int
	 * @author  Walter
	 */
	function removeLenguaje($idLeng) {
		$r = 1;
		$query = "delete from tbl_lenguajes where id = $idLeng";
		$con = conn();
		$msj = "ACCION REALIZADA CON EXITO";
		$n = $con -> exec($query);
		if ($n != 1) {
			$msj = "EL LENGUAJE YA TIENE ELEMENTOS ASIGNADOS, NO SE PUEDE ELIMINAR";
		}
		return $msj;
	}

	/**
	 * lista todos los lenguajes del sistema con sus numeros de participantes
	 *
	 * @return void
	 * @author
	 */
	function getLenguajes() {
		$query = "select l.id,l.lenguaje from tbl_lenguajes as l order by l.lenguaje asc";
		$con = conn();
		$r = $con -> query($query);
		return $r -> fetchAll();
	}
	
	/**
	 * funcion pendiente de depurar NO UTILIZAR
	 *
	 * @return array
	 * @author
	 */
	function getFrecLenguajes($curso) {
		$query = "select l.id,l.lenguaje, count(c.curso) as num_participantes
				from tbl_lenguajes as l, tbl_conocimientos as c where c.tbl_lenguajes_id = l.id
				and c.curso = $curso
				group by l.id";
		$con = conn();
		$r = $con -> query($query);
		return $r -> fetchAll();
	}

/**
	 * obtiene los datos basicos de un lenguaje
	 *
	 * @return array
	 * @author
	 */
	function getLeng($id) {
		$query = "select * from tbl_lenguajes where id = $id";
		$con = conn();
		$r = $con -> query($query);
		return $r -> fetch();
	}

	/**
	 * edita un lenguaje
	 *
	 * @return void
	 * @author Walter
	 */
	function editLeng($id, $lenguaje) {
		$query = "update tbl_lenguajes set lenguaje = '$lenguaje' where id = $id";
		$con = conn();
		$con -> exec($query);
	}

	/**
	 * lista todos los empleados que tienen conocimientos de un determinado lenguaje o curso
	 *
	 * @return array
	 * @author Walter
	 */
	function getEmps($id, $tipo) {
		//tipo = 0 obtiene todos los lenguaje sy cursos juntos
		if ($tipo == 0) {
			$sub = "";
		} 
		//tipo = 1 obtiene los cursos
		elseif ($tipo == 1) {
			$sub = "and t.curso = 1";
		} 
		//de lo contrario obtiene solo los lenguajes
		else {
			$sub = "and t.curso = 0";
		}
		$query = "select distinct e.id, e.nombre from tbl_conocimientos as t, tbl_lenguajes as l, tbl_empleado as e
where t.tbl_empleado_id = e.id and t.tbl_lenguajes_id = l.id and l.id = $id $sub";
		$con = conn();
		$r = $con -> query($query);
		return $r -> fetchAll();
	}
	
	/**
	 * obtiene una lista con los numeros de empleados por lenguajeo curso segun se requiera
	 *
	 * @return void
	 * @author
	 */
	function getNumsConoc($tipo){
		$query = "select l.lenguaje as label, count(t.curso) as value from tbl_lenguajes as l, tbl_conocimientos as t where t.tbl_lenguajes_id = l.id
 				and t.curso = $tipo group by l.id";
		$con = conn();
		$r = $con -> query($query);
		return $r -> fetchAll();
		
	}

} // END
?>