<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$cedula = $_REQUEST['cedula'];
$tipo = $_REQUEST['tipo'];
$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['pass'];
$opcion = $_REQUEST['opcion'];

include('../conexion/conexion.php');
include_once('../class/objeto_clase.php');

if ($opcion == 1) {
	$registrar_datos_todo = New registro_datos($nombre,$apellido,$cedula,$tipo,$usuario,$clave);
	$mostrar=$registrar_datos_todo->registrar_form();
	header("location:../panel.php?mostrar=".$mostrar);
} else if($opcion == 2){
	$objeto = new registro_datos($nombre,$apellido,$cedula,$tipo,$usuario,$clave);
	$mostrar=$objeto->editar_form();
	header("location:../panel.php?mostrar=".$mostrar);
} else if($opcion == 3){
	$objeto = new registro_datos("","",$cedula,"","","");
	$resultado = $objeto->mostrar_cedula();
	if ($resultado != 0){
		
		$cedula=$resultado['cedula'];
		$nombre=$resultado['nombre'];
		$apellido=$resultado['apellido'];
		$tipo=$resultado['tipo'];
		$usuario=$resultado['usuario'];
		$clave=$resultado['clave'];

		header("location:../panel.php?cedula=".$cedula."&nombre=".$nombre."&apellido=".$apellido."&tipo=".$tipo."&usuario=".$usuario."&clave=".$clave);
	}else{
		header("location:../panel.php?cedula=".$cedula);
	}
}else if ($opcion == 4){

	$objeto = new registro_datos("","",$cedula,"","","");
	$mostrar=$objeto->eliminar_session();
	header("location:../panel.php?mostrar=".$mostrar);

}else if ($opcion == 5){

	$objeto = new registro_datos("","","",$tipo,"","");
	$resultado = $objeto->mostrar_tipo();
	if ($resultado['total'] > 2) {
		echo "ERROR de LONG DEL TIPO";
	}else{
		echo "TODO VA BIEN";
	}
	// if ($resultado == 2) {
	// 	$msj = "Se exedió el numero de usuarios tipo 1";
	// 	header("location:../panel.php?msj=".$msj);
	// }
	// $msj = "BIEN";

	// for ($i=0; $i = count($resultado); $i++) { 
	// 	if($resultado[$i] == 2){
	// 		$total_2[] = $resultado[$i];
	// 	}else if($resultado[$i] == 1){
	// 		$total_1[] = $resultado[$i];
	// 	}	
	// }
	// if ($resultado != 0){
	// 	$tipo=$resultado['tipo'];
	// 	header("location:../panel.php?tipo=".$tipo."&resultado=".count($resultado));
	// }else{
	// 	header("location:../panel.php?cedula=".$cedula);
	// }
}




// $d = "holanda";
// header("location:../panel.php");
?>