<?php 

    require_once "conexion.php";
    require_once "../modelo/clases/Crud.php";

	$obj= new crud();

	echo $obj->eliminarTrabajo($_POST['idTrabajo']);

 ?>