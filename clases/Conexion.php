<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $password="";
		private $bd="ventas";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}

		class conectar1{
		private $servidor="localhost";
		private $usuario="root";
		private $password="";
		private $bd="aut_par_co";

		public function conexion1(){
			$conexion1=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion1;
		}
	}

 ?>