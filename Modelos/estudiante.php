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
        $res=$objBaseDatos->prepare("select est_id, est_nom, est_dir, est_tel, est_ced,pro_nom from estudiante es inner join programa pro on es.pro_id = pro.pro_id where est_ced = '$this->est_ced'");
        //call PA_Estudiante('','$this->est_ced','','','','','','listar_ws')
        $res->execute();
        return $res;
        echo $res;
        $objBaseDatos=null;

    }

}


?>