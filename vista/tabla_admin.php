<?php
    require_once "../controlador/conexion.php";
    $obj = new conectar();
    $conexion= $obj->conexion();
    
    $sql="SELECT id, fecha, tt.tipo_trabajo as 'tipo trabajo' ,concat(c.nombre_cliente,' ',
                c.apellido_cliente) as 'cliente', descripcion_trabajo, disponibilidad, 
                p.nombre_plan , concat(t.nombre_tecnico,' ',t.apellido_tecnico) as 'tecnico' 
          from trabajo t2
    inner join tipo_trabajo tt on t2.id_tipo_trabajo = tt.id_tipo_trabajo
    inner join cliente c on t2.id_cliente = c.id_cliente
    inner join tecnico t on t2.id_tecnico = t.id_tecnico
    INNER JOIN plan p on t2.id_plan = p.id_plan
    ;";

    $result= mysqli_query($conexion,$sql);


?>

<div>
    <table class= "table table-hover table-condensed table-bordered" id="id_tabla_admin">
        <thead style="background-color: #f44336; color: white; 
            font-weight: bold; font-size: 13px;" >
            <tr>
                <td>Fecha</td>
                <td>Tipo Trabajo</td>
                <td>Nombre Cliente</td>
                <td>Descripcion Trabajo</td>
                <td>disponibilidad</td>
                <td>Plan</td>
                <td>Tecnico</td>
                <td>Editar</td>
                <td>Eliminar</td>
                
            </tr>
        </thead>
        <tfoot style="background-color: #f44336; color: white;
            font-weight: bold; font-size: 13px;">
            <tr>
                <td>Fecha</td>
                <td>Tipo Trabajo</td>
                <td>Nombre Cliente</td>
                <td>Descripcion Trabajo</td>
                <td>disponibilidad</td>
                <td>Plan</td>
                <td>Tecnico</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </tfoot>
        <tbody>
            <?php
                while ($leer= mysqli_fetch_row($result)) {    
            ?>
            <tr style="font-size: 11px;">
                <td><?php echo $leer[1] ?></td>
                <td><?php echo $leer[2] ?></td>
                <td><?php echo $leer[3] ?></td>
                <td><?php echo $leer[4] ?></td>
                <td><?php echo $leer[5] ?></td>
                <td><?php echo $leer[6] ?></td>
                <td><?php echo $leer[7] ?></td>
                
                <td style="text-align: center;">
                    <span class= "btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="obtenDatosTrabajo('<?php echo $leer[0]?>')">
                        <span class="fa fa-pencil-square-o"></span>
                        
                    </span>
                        
                </td>
                <td style="text-align: center;">
                    <span class= "btn btn-danger btn-sm" onclick="eliminarTrabajo('<?php echo $leer[0]?>')">
                        <span class="fa fa-trash"></span>
                    </span>
                        
                </td>
                
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<!-- <script type="text/javascript">
    $(document).ready(function() {
    $('#id_tabla_admin').DataTable();
} );
</script> 
 -->

<script>
    $(document).ready(function() {
  $('#id_tabla_admin').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});
</script>
