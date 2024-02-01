<?php
	$conexion= new mysqli("localhost", "root", "", "bd_controlTrabajos");
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
	}

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect("localhost", "root", "", "bd_controlTrabajos");

			return $conexion;
		}

	}
?>