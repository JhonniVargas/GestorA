<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    session_start();
    require_once "../scripts.php";
    require_once "../controlador/conexion.php"
    
    ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imagen/LOGO.png">
    <title>Sistema de Planificacion Conecta Future</title>
    <style type="text/css">
    @import url("style_vistas.css");    
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="#">
    <img src="imagen/LOGO.png" width="30" height="30" class="d-inline-block align-top" alt="">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestion de Trabajos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#agregarNuevoTrabajoModal">
                Agregar Trabajo</a>
            
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
            Gestion de Clientes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#agregarNuevoClienteModal">
                Agregar Clientes
            </a>
            
            
            
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestion de Planes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#agregarNuevoPlanModal">Agregar Plan</a>
            
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestion de Usuarios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#agregarNuevoTecnicoModal">Agregar tecnico</a>
        </li>
        
        </ul>

        <ul class="nav justify-content-end">
        
            <li class="nav-item">
                <a class="nav-link active" href="../inicio.php">cerrar session  (
                    <?php 
                    
                    echo $_SESSION['username'];
                    
                        ?>)</a>
            </li>
        </ul>
        
    </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center">
                    <div class="card-header">
                        Control Asistencias-Instalaciones-Retiros
                    </div>
                    <div class="card-body">
                        
                        <hr>
                        <div id="tabla_Trabajos"></div>
                    </div>
                    <div class="card-footer text-muted">
                        
                        <!-- Footer -->
                        <footer class="text-center text-lg-start bg-light text-muted">
                        <!-- Section: Social media -->
                        <section
                            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
                        >
                            <!-- Left -->
                            <div class="me-5 d-none d-lg-block">
                            <span>Conéctese con nosotros en las redes sociales: </span>
                            </div>
                            <!-- Left -->

                            <!-- Right -->
                            <div>
                            <a href="" class="me-4 text-reset">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                                <i class="fa fa-instagram"></i>
                            </a>
                            </div>
                            <!-- Right -->
                        </section>
                        <!-- Section: Social media -->

                        <!-- Section: Links  -->
                        <section class="">
                            <div class="container text-center text-md-start mt-5">
                            <!-- Grid row -->
                            <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fa fa-building"></i> Conecta Future
                                </h6>
                                <p>
                                Proveemos un servicio personalizado y amable, para la comunidad de la región de O´Higgins permitiendo 
                                conectarse a este mundo digital cambiante, entregando un servicio de excelencia a precio razonable.
                                </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Planes
                                </h6>
                                <p>
                                    <a href="http://conectafuture.cl/planesempresa/" class="text-reset">Planes Empresa</a>
                                </p>
                                <p>
                                    <a href="http://conectafuture.cl/nuestrosplanes/" class="text-reset">Planes Hogar</a>
                                </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Enlaces de interes
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Nuestra Ubicacion</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Nosotros</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Speed Test</a>
                                </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Contacto
                                </h6>
                                <p><i class="fa fa-home"></i> Subteniente Valenzuela 216, Doñihue, Rancagua O' Higgins</p>
                                <p>
                                    <i class="fa fa-envelope me-3"></i>
                                    contacto@conectafuture.cl
                                </p>
                                <p><i class="fa fa-phone me-3"></i> + 569 44227933</p>
                                <p><i class="fa fa-print me-3"></i> + 072 2548628</p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                            </div>
                        </section>
                        <!-- Section: Links  -->
                  

                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>

<!-- Modal Agregar Trabajo-->
<div class="modal fade" id="agregarNuevoTrabajoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agragar nuevo trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmTrabajo">
            <label>
                Tipo Trabajo
            </label>
            <select class="form-control" id="cbotipoTrabajo" name="cbotipoTrabajo" required>
                <option value=0>Seleccione..</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM tipo_trabajo;";

                    $result= mysqli_query($conexion,$sql);
            
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[1]?>
                </option>   
                <?php
                }
                ?>
                
            </select>
            <label>
                Cliente
            </label>
            <select class="form-control" id="cbocliente" name="cbocliente" required>
                <option>Seleccione...</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM cliente;";

                    $result= mysqli_query($conexion,$sql);
                ?>
                
                <?php
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[2].' '.$leer[3]?>
                </option>   
                <?php
                }
                ?>
            </select>
            <label>
                Descripcion del trabajo
            </label>
            <textarea class="form-control" id="txtdescripcionTrabajo" name="txtdescripcionTrabajo"
            placeholder="Trabajo a realizar" required></textarea>
            <label>
                Disponibilidad
            </label>
            <input type="text" class="form-control input-sm" id="txtdisponibilidad" name="txtdisponibilidad" required>
            <label>
                Plan
            </label>
            <select class="form-control" id="cboPlan" name="cboPlan" required>
                <option id="cboPlan"> Seleccione..</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM plan;";

                    $result= mysqli_query($conexion,$sql);
                ?>
                
                <?php
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[1]?>
                </option>   
                <?php
                }
                ?>
            </select>
            <label>
                Tecnico
            </label>
            <select class="form-control" id="cboTecnico" name="cboTecnico" required>
                <option id="cboTecnico">Seleccione..</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM tecnico;";

                    $result= mysqli_query($conexion,$sql);
                ?>
                
                <?php
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[1].' '.$leer[2]?>
                </option>   
                <?php
                }
                ?>
            </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnGuardarTrabajo" class="btn btn-primary">Guardar Trabajo</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Trabajo-->

<!-- Modal Agregar Cliente-->
<div class="modal fade" id="agregarNuevoClienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agragar nuevo cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmCliente">
        <label>rut</label>
        <input type="text" class="form-control input-sm" id="txtrutCliente" name="txtrutCliente" required>
        <label>Nombre</label>
        <input type="text" class="form-control input-sm" id="txtNombreCliente" name="txtNombreCliente" required>
        <label>Apellido</label>
        <input type="text" class="form-control input-sm" id="txtApellidoCliente" name="txtApellidoCliente" required>
        <label>Telefono</label>
        <input type="text" class="form-control input-sm" id="txtTelefonoCliente" name="txtTelefonoCliente" required>
        <label>Direccion</label>
        <input type="text" class="form-control input-sm" id="txtDireccionCliente" name="txtDireccionCliente" required>
        <label>Localidad</label>
        <input type="text" class="form-control input-sm" id="txtLocalidad" name="txtLocalidad" required>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnGuardarCliente" class="btn btn-primary">Guardar Cliente</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Cliente-->


<!-- Modal Editar Trabajo-->

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmEditar">
          <!-- id-->
          <label>
          <input type="text" class="form-control input-sm" name="id_trabajo" id="id_trabajo" hidden>  
            </label>
            
          <!-- Tipo Trabajo-->
            <label>
                Tipo Trabajo
            </label>
            <select class="form-control" id="cbotipoTrabajoU" name="cbotipoTrabajoU" required>
                <option ></option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM tipo_trabajo;";

                    $result= mysqli_query($conexion,$sql);
            
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[1]?>
                </option>   
                <?php
                }
                ?>
                
            </select>
            <!-- Cliente-->
            <label>
                Cliente
            </label>
            <select class="form-control" id="cboclienteU" name="cboclienteU" required>
                <option>Seleccione...</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM trabajo;";

                    $result= mysqli_query($conexion,$sql);
                ?>
                
                <?php
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[3].' '.$leer[4]?>
                </option>   
                <?php
                }
                ?>
            </select>
            <!-- Descripcion del trabajo-->
            <label>
                Descripcion del trabajo
            </label>
            <textarea class="form-control" id="txtdescripcionTrabajoU" name="txtdescripcionTrabajoU"
            placeholder="Trabajo a realizar" required></textarea>
            <!-- Disponibilidad-->
            <label>
                Disponibilidad
            </label>
            <input type="text" class="form-control input-sm" id="txtdisponibilidadU" name="txtdisponibilidadU" required>
            <!-- Plan-->
            <label>
                Plan
            </label>
            <select class="form-control" id="cboPlanU" name="cboPlanU" required>
                <option id="cboPlan"> Seleccione..</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM plan;";

                    $result= mysqli_query($conexion,$sql);
                ?>
                
                <?php
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[1]?>
                </option>   
                <?php
                }
                ?>
            </select>
            <!-- Tecnico-->
            <label>
                Tecnico
            </label>
            <select class="form-control" id="cboTecnicoU" name="cboTecnicoU" required>
                <option id="cboTecnico">Seleccione..</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM tecnico;";

                    $result= mysqli_query($conexion,$sql);
                ?>
                
                <?php
                while ($leer= mysqli_fetch_row($result)) {    
                ?> 
                <option value="<?php echo $leer[0]?>">
                            <?php echo $leer[1].' '.$leer[2]?>
                </option>   
                <?php
                }
                ?>
            </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar Trabajo-->


<!-- Modal Agregar Plan-->
<div class="modal fade" id="agregarNuevoPlanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agragar nuevo Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmPlan">
        <label>Nombre del Plan</label>
        <input type="text" class="form-control input-sm" id="txtPlan" name="txtPlan" required>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnGuardarPlan" class="btn btn-primary">Guardar Plan</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Plan-->

<!-- Modal Agregar Tecnico-->
<div class="modal fade" id="agregarNuevoTecnicoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agragar nuevo cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmTecnico">
        <label>Nombre</label>
        <input type="text" class="form-control input-sm" id="txtNombreTecnico" name="txtNombreTecnico" required>
        <label>Apellido</label>
        <input type="text" class="form-control input-sm" id="txtApellidoTecnico" name="txtApellidoTecnico" required>
        <label>Telefono</label>
        <input type="text" class="form-control input-sm" id="txtTelefonoTecnico" name="txtTelefonoTecnico" required>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnGuardarTecnico" class="btn btn-primary">Guardar Tecnico</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Tecnico-->


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnGuardarTrabajo').click(function(){
			datos=$('#frmTrabajo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"../controlador/agregarTrabajo.php",
				success:function(r){
                    

					if(r==1){
						$('#frmTrabajo')[0].reset();
						$('#tabla_Trabajos').load('tabla_admin.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});

        $('#btnGuardarCliente').click(function(){
			datos=$('#frmCliente').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"../controlador/agregarCliente.php",
				success:function(r){
                    

					if(r==1){
						$('#frmCliente')[0].reset();
						$('#tabla_Trabajos').load('tabla_admin.php');
						alertify.success("cliente agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar el cliente :(");
					}
				}
			});
		});

		/* $('#btnActualizar').click(function(){
			datos=$('#actualizar').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		}); */

        $('#btnGuardarPlan').click(function(){
			datosPlan=$('#frmPlan').serialize();

			$.ajax({
				type:"POST",
				data:datosPlan,
				url:"../controlador/agregarPlan.php",
				success:function(r){
                    

					if(r==1){
						$('#frmPlan')[0].reset();
						$('#tabla_Trabajos').load('tabla_admin.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});

        $('#btnGuardarTecnico').click(function(){
			datos=$('#frmTecnico').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"../controlador/agregarTecnico.php",
				success:function(r){
                    alertify.error("paso"+r);

					if(r==1){
						$('#frmTecnico')[0].reset();
						$('#tabla_Trabajos').load('tabla_admin.php');
						alertify.success("Tecnico agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar el Tecnico :(");
					}
				}
			});
		});

        
    });

    function eliminarTrabajo(idTrabajo){
		alertify.confirm('Eliminar un Trabajo', '¿Seguro de eliminar este trabajo  ?', function(){ 

			$.ajax({
				type:"POST",
				data:"idTrabajo=" + idTrabajo,
				url:"../controlador/eliminarTrabajo.php",
				success:function(r){
					if(r==1){
						$('#tabla_Trabajos').load('tabla_admin.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});


	}
</script>



<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla_Trabajos').load('tabla_admin.php');
    });
</script>

  

<script type="text/javascript">
	function obtenDatosTrabajo(id_trabajo){
        
		$.ajax({
			type:"POST",
			data:"idTrabajo="+id_trabajo,
			url:"../controlador/obtenDatosTrabajo.php",
         
			success:function(r){
        console.log(r);        
                
				datosU=jQuery.parseJSON(r);
        
                $('#txtdisponibilidadU').val(datosU['disponibilidad']);
				        $('#id_trabajo').val(datosU['id']);
                $('#cbotipoTrabajoU').val(datosU['id_tipo_trabajo']);
                $('#cboclienteU').val(datosU['id_cliente']);
                $('#txtdescripcionTrabajoU').val(datosU['descripcion_trabajo']);
                $('#cboPlanU').val(datosU['id_plan']);
                $('#cboTecnicoU').val(datosU['id_tecnico']);
                
            }
             
		});
	}

</script> 

<!-- <script type="text/javascript">
    function agreFrmEditar(idTrabajo){
        $.ajax({
            type:"POST",
            data:"idTrabajo=" + id,
            url:"../controlador/obtenDatosTrabajo.php",
            alertify.success(r);
				datos=jQuery.parseJSON(r);
        })
    }
</script> -->

