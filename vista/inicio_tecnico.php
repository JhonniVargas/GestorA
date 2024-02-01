<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    session_start();
    require_once "../scripts.php";?>
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
        

        
        
        </ul>

        <ul class="nav justify-content-end">
        
            <li class="nav-item">
                <a class="nav-link active" href="../inicio.php">Cerrar sesion (
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





<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla_Trabajos').load('tabla_tecnico.php');
    });
</script>



<!-- Modal Agregar Informe-->
<div class="modal fade" id="agregarNuevoInformeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agragar nuevo Informe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmTrabajo">
            <label>
                id Trabajo
            </label>
            <input type="text" class="form-control input-sm" id="txtlatitud" name="txtlatitud" disable>
            <label>
                Latitud
            </label>
            <input type="text" class="form-control input-sm" id="txtlatitud" name="txtlatitud" required>
            <label>
                Longitud
            </label>
            <input type="text" class="form-control input-sm" id="txtlongitud" name="txtlongitud" required>
            Estado inicial
            </label>
            <input type="text" class="form-control input-sm" id="txtestadoi" name="txtestadoi" required>
            Resultado
            </label>
            <input type="text" class="form-control input-sm" id="txtresultado" name="txtresultado" required>
            <label>
                Rayo
            </label>
            <select class="form-control" id="cboRayo" name="cboRayo" required>
                <option id="cboRayo"> Seleccione..</option>
                <?php
                    $obj = new conectar();
                    $conexion= $obj->conexion();
                    
                    $sql="SELECT * FROM rayo;";

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
            IP
            </label>
            <input type="text" class="form-control input-sm" id="txtip" name="txtip" required>
            MAC
            </label>
            <input type="text" class="form-control input-sm" id="txtmac" name="txtmac" required>
            <label>
                Trabajo Realizado
            </label>
            <textarea class="form-control" id="txtTrabajoR" name="txtTrabajoR"
            placeholder="Trabajo realizado" required></textarea>
            <label>
                Comentario
            </label>
            <input type="text" class="form-control input-sm" id="txtcomentario" name="txtdisponibilidad" required>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnGuardarInforme" class="btn btn-primary">Guardar Trabajo</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Informe-->