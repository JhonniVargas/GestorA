<?php 
    
	class crud{
		public function agregarTrabajo($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into trabajo (fecha, id_tipo_trabajo, id_cliente, descripcion_trabajo, disponibilidad, id_plan, id_tecnico)
									values (NOW(),
                                            $datos[0],
											$datos[1],
                                            '$datos[2]',
                                            '$datos[3]',
                                            $datos[4],
                                            $datos[5]);";
    
			return mysqli_query($conexion,$sql);
		}

		public function agregarCliente($datosCliente){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT INTO cliente(rut, nombre_cliente, apellido_cliente, telefono, direccion, localidad)
			VALUES ('$datosCliente[0]',
			'$datosCliente[1]',
			'$datosCliente[2]',
			'$datosCliente[3]',
			'$datosCliente[4]',
			'$datosCliente[5]'
			);";

			

			return mysqli_query($conexion,$sql);


		}

		public function agregarPlan($datosPlan){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT INTO plan(nombre_plan) VALUES ('$datosPlan[0]');";

			

			return mysqli_query($conexion,$sql);


		}

		public function agregarTecnico($datosTecnico){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT INTO tecnico(nombre_tecnico, apellido_tecnico, telefono_tecnico, id_usuario)
			VALUES ('$datosTecnico[0]',
			'$datosTecnico[1]',
			'$datosTecnico[2]',
			2
			);";

			

			return mysqli_query($conexion,$sql);


		}
        
		public function obtenDatosTrabajo($id_trabajo){
			$obj= new conectar();
			$conexion=$obj->conexion();
            print $id_trabajo;
			$sql="SELECT id, fecha, id_tipo_trabajo, id_cliente, descripcion_trabajo, disponibilidad, id_plan, id_tecnico from trabajo  
                WHERE id =$id_trabajo;";
                
            
            $result=mysqli_query($conexion,$sql);
            
			$ver=mysqli_fetch_row($result);
            
			$datosU=array(
                'id'=>$ver[0],
				'fecha' => $ver[1],
				'id_tipo_trabajo' => $ver[2],
				'id_cliente' => $ver[3],
                'descripcion_trabajo' => $ver[4],
                'disponibilidad' => $ver[5],
                'id_plan' => $ver[6],
                'id_tecnico' => $ver[7]
				);
			return $datosU;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_juegos set nombre='$datos[0]',
										anio='$datos[1]',
										empresa='$datos[2]'
						where id_juego='$datos[3]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminarTrabajo($idTrabajo){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from trabajo where id='$idTrabajo'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?> 