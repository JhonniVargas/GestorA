<?php
header('Content-Type: application/json');
    require_once "conexion.php";
    require_once "../modelo/clases/Crud.php";

    $obj= new crud();
    
    echo json_decode($obj->obtenDatosTrabajo($_POST['idTrabajo']));
    
?>