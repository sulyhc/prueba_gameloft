<?php

	/**
	 * devuelve un objeto con la conexion hacia la base de datos
	 *
	 * @return pdo_conn
	 * @author  Walter
	 */
function conn(){
	$con = null;
	try{		
		$con = new PDO("mysql:host=localhost;dbname=ecommercepruebas", "root", "compu31011991");
		}
	catch(PDOException $e){
		echo $e->getMessage();
		exit;
	}
	return $con;
	}
 ?>