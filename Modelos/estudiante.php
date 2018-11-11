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

     function insertar_estudiante($cedula,$nombre,$direccion,$telefono,$jornadaid,$programaid){
        $objBaseDatos= new Conexion();
        $this->est_nom = $nombre;
        $this->est_dir = $direccion;
        $this->est_tel = $telefono;
        $this->jor_id = $jornadaid;
        $this->pro_id = $programaid;
        $this->est_ced = $cedula;
       
        $res=$objBaseDatos->prepare("call PA_Estudiante('','$this->est_ced','$this->est_nom','$this->est_dir','$this->est_tel','$this->jor_id','$this->pro_id','nuevo')");
        $res->execute();
        return $res;
        $objBaseDatos=null;
    }


}


?>