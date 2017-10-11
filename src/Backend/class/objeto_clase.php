<?php
class registro_datos
{
	private $nombre; 
	private $apellido;
	private $cedula;
	private $tipo ;
	private $usuario;
	private $clave;

	Public function __construct($nombre,$apellido,$cedula,$tipo,$usuario,$clave)
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->cedula = $cedula;
		$this->tipo = $tipo;
		$this->usuario = $usuario;
		$this->clave = $clave;
	}

	public function mostrar_cedula(){
		$action = mysql_query("SELECT * FROM session WHERE cedula='$this->cedula'");
        $datos=mysql_fetch_array($action);
        if($datos['cedula'])        
          return $datos;
        else
          return 0;
	}	

	public function mostrar_usuario(){
		$action = mysql_query("SELECT * FROM session");
		$datos = mysql_fetch_array($action);
		return $dato['cedula'];
	}
	public function registrar_form(){
		$action = mysql_query("INSERT INTO session(nombre,apellido,cedula,tipo,usuario,clave) VALUES ('$this->nombre','$this->apellido','$this->cedula','$this->tipo','$this->usuario','$this->clave')");
		if (!$action) {
			echo "Error en session";
		}
	}
	public function editar_form(){
		$action = mysql_query("UPDATE session SET nombre = '$this->nombre', apellido = '$this->apellido', cedula = '$this->cedula', tipo = '$this->tipo', usuario = '$this->usuario', clave = '$this->clave' WHERE clave = '$this->clave'");
		if (!$action) {
			echo "Error de conexion";
		}
	}
	public function eliminar_session(){
		$action = mysql_query("DELETE FROM session WHERE cedula = '$this->cedula'");
        if(!$action)
          return 0;
        else
          return 1;
	}
	public function mostrar_tipo(){
		$action = mysql_query("SELECT tipo, count(*) total FROM session WHERE tipo = 1");
        $datos=mysql_fetch_array($action); 
        return $datos;
        // $arr = [1,1,1];
        // if(count($datos) > 2){
        // }else{
        // 	return 0;
        // }     
	}
}
//Resolver Problema de que no salen los valores de todos los campos
?>