<?php
include("../controladores/conexion.php");
include("../controladores/dao.php");
$conexion =new Conexion();
$c=$conexion->conectar();
$dao=new dao();
$gramaticas=$dao->ver($c,"SELECT * FROM gramatica ORDER BY nombre");
$contador=1;
?>
<!DOCTYPE html>
<html lang="es">

<?php include("arriba.php");?>

<body>
    <div class="encabezado">
        <div class="separador">
            <a href="../view/" class="barra">Inicio</a>
        </div>
        <div class="linea">
        </div>
        <div class="separador">
            <a href="../view/nuevoGramatica.php" class="barra">Nuevo</a>
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
                    <th>Nombre</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    <?php While($gramatica=mysqli_fetch_assoc($gramaticas)){ 
                                if($contador%2==0){?>
                    <tr class="alt">
                        <?php }else{ ?>
                    <tr>
                        <?php } ?>
                        <td><?php echo $contador?></td>
                        <td><?php echo $gramatica['nombre']; ?></td>
                        <td>
                            <input type='hidden' value="">
                            <div class="btn-group">
                                <button data-toggle="modal" class="btn acept btn-sm" data-target="#modalEditar"
                                    title="Editar" id="editarm"><i class="fa fa-list fa-lg"></i></button>
                                <button title="eliminar" class="btn cancel btn-sm" data-toggle="modal"
                                    data-target="#modalEliminar" id="eliminarm">
                                    <i class="fa fa-times fa-lg"></i>
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