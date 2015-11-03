<?php 
//registra un nuevo lenguaje
include_once("../controller/cLenguajes.php");
$leng = new cLenguajes();
if($_POST['idLeng'] == "-1" || $_POST['idLeng'] == -1){
$leng->altaLenguaje($_POST['lenguaje']);}
else{	
$leng->editLeng($_POST['idLeng'],$_POST['lenguaje']);
}
?>