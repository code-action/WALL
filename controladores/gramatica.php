<?php
include("conexion.php");
include("dao.php");
$conexion =new Conexion();
$c=$conexion->conectar();
$dao=new dao();

$bandera = $_POST["bandera"];
// Función para insertar en la base de datos.
if($bandera=="guardar"){
    $nombre=$_POST["nombre"];
    $sql = "INSERT INTO gramatica (nombre) VALUES ('$nombre')";
    echo $dao->guardar($c,$sql);
    $dao->cerrar($c);
    $_SESSION['mensaje'] = "Guardado";
    header("location: /WALL/view/gramatica.php");
}
// Función para editar en la base de datos.
if($bandera=="editar"){
    $nombre=$_POST["nombre"];
    $codigo=$_POST["codigo"];
    $id=$_POST["id"];
    $sql = "UPDATE grado SET nombre='$nombre',codigo='$codigo' WHERE id_grado='$id'";
    echo $dao->accion($c,$sql);
}
// Función para eliminar en la base de datos.
if($bandera=="eliminar"){
    $id=$_POST["id"];
    $sql = "DELETE FROM grado WHERE id_grado='$id'";
    echo $dao->accion($c,$sql);
}
?>