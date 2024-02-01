<?php
    require_once "conexion.php";
    require_once "../modelo/clases/Crud.php";
    $obj= new crud();
    $datosTecnico = array(
        $_POST['txtNombreTecnico'],
        $_POST['txtApellidoTecnico'],
        $_POST['txtTelefonoTecnico']
    );
    echo $obj->agregarTecnico($datosTecnico);
?>

