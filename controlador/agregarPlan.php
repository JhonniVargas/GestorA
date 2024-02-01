<?php
    require_once "conexion.php";
    require_once "../modelo/clases/Crud.php";
    $obj= new crud();
    $datosPlan = array(
        $_POST['txtPlan']
    );
    echo $obj->agregarPlan($datosPlan);
?>