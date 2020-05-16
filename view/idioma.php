<?php
include("../controladores/conexion.php");
include("../controladores/dao.php");
$conexion =new Conexion();
$c=$conexion->conectar();
$dao=new dao();
$idiomas=$dao->ver($c,"SELECT * FROM idioma ORDER BY nombre");
$contador=1;
?>
<!DOCTYPE html>
<html lang="es">

<?php include("arriba.php");?>

<body>
    <div class="encabezado">
        <div class="separador">
            <a href="../view/" class="barra">Start</a>
        </div>
        <div class="linea">
        </div>
        <div class="separador">
            <a href="../view/nuevoIdioma.php" class="barra">New</a>
        </div>
        <div class="linea">
        </div>
    </div>
    <div class="lateral">
        <?php include("lateral.php");?>
    </div>
    <div class="centro">
        <div class="dsmallw">
            <table class="purpleHorizon">
                <thead>
                    <th>N°</th>
                    <th>Name</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    <?php While($idioma=mysqli_fetch_assoc($idiomas)){ 
                                if($contador%2==0){?>
                    <tr class="alt">
                        <?php }else{ ?>
                    <tr>
                        <?php } ?>
                        <td><?php echo $contador?></td>
                        <td><?php echo $idioma['nombre']; ?></td>
                        <td>
                            <input type='hidden' value="">
                            <div class="btn-group">
                                <button data-toggle="modal" class="acept btn-sm" data-target="#modalEditar"
                                    title="Editar" id="editarm"><i class="fa fa-list"></i></button>
                                <button title="eliminar" class="cancel btn-sm" data-toggle="modal"
                                    data-target="#modalEliminar" id="eliminarm">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php
                $contador++;
             } 
             ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a
                                    href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>


    </div><!-- Fin centro -->

    <?php include("abajo.php");?>
</body>


</html>