<link rel="stylesheet" type="text/css" href="../librerias/alertify/css/alertify.css">
<link rel="stylesheet" type="text/css" href="../librerias/alertify/css/themes/bootstrap.css">
<?php
	require_once "../scripts.php";
	
	ConsultarUsuario($_POST['inputUsuario'], $_POST['inputPassword']);
	function ConsultarUsuario($user, $password)
	{
		include'conexion.php';
		$sentencia="SELECT * FROM usuario WHERE nom_usuario='".$user."' AND pass='".$password."' ";
		$resultado=$conexion->query($sentencia) ;
		
		$row = $resultado->fetch_array(2);
		
		if ($row == NULL ){
			echo '<script>';
				echo 'alertify.error("Datos de acceso incorrectos");';
				echo 'window.location.href="../inicio.php";';
			echo '</script>';
		}

		$tipoUser = array_pop($row);

		
		

		$count = mysqli_num_rows($resultado); 
		echo $tipoUser;
		
		if($count > 0) 
		{
			if($tipoUser == 1){
				session_start();
				$_SESSION['username']=$user;
				echo '<script>';
				echo 'alertify.success("Bienvenido !!");';
				echo 'alertify.success("Bienvenido '.$user.' !!");';
				
				echo 'window.location.href="../vista/inicio_admin.php";';
				echo '</script>';
			}
			else{
				session_start();
				$_SESSION['username']=$user;
				echo '<script>';
				echo 'alertify.success("Bienvenido Tecnico!!");';
				echo 'window.location.href="../vista/inicio_tecnico.php";';
				echo '</script>';
			}
		}
		else{
			echo '<script>';
				echo 'alertify.error("Datos de acceso incorrectos");';
				echo 'window.location.href="../index.php";';
			echo '</script>';
		}
	}
?>