<?php 
include 'conexionbd.php';

class estudiantes{

    private $est_id;
    private $est_nom;
    private $est_dir;
    private $est_tel;
    private $jor_id;
    private $pro_id;
    private $est_ced;

    function identificacionestudiante($cedula){
        $objBaseDatos= new Conexion();
        $this->est_ced = $cedula;
        $res=$objBaseDatos->prepare("call PA_Estudiante('','$this->est_ced','','','','','','listar_ws')");
        $res->execute();
        return $res;
        $objBaseDatos=null;
    }

}


?>