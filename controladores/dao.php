<?php 
class dao{
    function __construct(){

    }
    public function ver($conexion,$sql){
        $grados=mysqli_query($conexion,$sql);
        return $grados;
        
    }
    public function guardar($conexion,$sql){
        $valor= mysqli_query($conexion,$sql)or die ("0");
        if($valor=="0"){
            return 0;
        }else{
            $id= mysqli_insert_id($conexion);
            return $id;
        }
    }
    public function accion($conexion,$sql){
        $valor= mysqli_query($conexion,$sql)or die ("0");
        if($valor=="0"){
            return 0;
        }else{
            return 1;
        }
    }

    public function cerrar($conexion){
        mysqli_close($conexion);
    }

}
?>