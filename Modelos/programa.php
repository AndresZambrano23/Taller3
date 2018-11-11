<?php 
include 'conexionbd.php';

class programa{


    private $pro_id;


    function identificacionprograma($programa){
        $objBaseDatos= new Conexion();
        $this->pro_id = $programa;
        $res=$objBaseDatos->prepare("call PA_Programa('$this->pro_id','','','listar_ws')");
        $res->execute();
        return $res;
        $objBaseDatos=null;
    }

}


?>