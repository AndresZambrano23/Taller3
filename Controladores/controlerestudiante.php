<?php 
include '../Modelos/estudiante.php';

class informacionestudiante {

    function listarestudiante($cedula){
        $objModelo=new estudiantes();
        $res=$objModelo->identificacionestudiante($cedula);
        $datos=$res->fetchAll();
        foreach ($res as $row) {
	    $datos[]=$row;
    }
    var_dump(json_encode($datos));
}
}

?>