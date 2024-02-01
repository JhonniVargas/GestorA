<?php
    require_once "conexion.php";
    require_once "../modelo/clases/Crud.php";
    $obj= new crud();
    $datos = array(
        $_POST['cbotipoTrabajo'],
        $_POST['cbocliente'],
        $_POST['txtdescripcionTrabajo'],
        $_POST['txtdisponibilidad'],
        $_POST['cboPlan'],
        $_POST['cboTecnico']
    );
    echo $obj->agregarTrabajo($datos);
?>