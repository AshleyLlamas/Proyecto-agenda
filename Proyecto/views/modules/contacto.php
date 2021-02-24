<?php
	include("conexion.php");
	class Contacto extends Conexion{

		public function alta($nombre,$apellido,$correo,$telefono){
			$this->sentencia="INSERT INTO contacto VALUES ('','$nombre','$apellido','$correo','$telefono')";
			$bandera=$this->ejecutar_sentencia();
		}
		
		public function consultar(){
			$this->sentencia = "SELECT * FROM contacto;";
			$resultado = $this->obtener_sentencia();
			return $resultado;
		}

		public function cargar($id){
			$this->sentencia="SELECT * FROM contacto WHERE id='$id'";
			$resultado=$this->obtener_sentencia();
			return $resultado;
		}

		public function baja($id){
			$this->sentencia="DELETE FROM contacto WHERE id='$id'";
			$this->ejecutar_sentencia();
		}

		public function modificar($id, $nombre, $apellido, $correo, $telefono){
			$this->sentencia="UPDATE contacto SET nombre='$nombre', apellidos='$apellido', correo='$correo', telefono='$telefono' WHERE id='$id'";
			$this->ejecutar_sentencia();
		}
	}
?>