<?php
    require_once "conexion.php";
    require_once "../modelo/clases/Crud.php";
    $obj= new crud();
    $datosCliente = array(
        $_POST['txtrutCliente'],
        $_POST['txtNombreCliente'],
        $_POST['txtApellidoCliente'],
        $_POST['txtTelefonoCliente'],
        $_POST['txtDireccionCliente'],
        $_POST['txtLocalidad']
    );
    echo $obj->agregarCliente($datosCliente);
?>

