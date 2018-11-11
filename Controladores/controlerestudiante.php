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

	function add_estudiante($cedula,$nombre,$direccion,$telefono,$jornadaid,$programaid){
        $objModelo=new estudiantes();
        $res=$objModelo->insertar_estudiante($cedula,$nombre,$direccion,$telefono,$jornadaid,$programaid);
 //        $datos=$res->fetchAll();
 //        foreach ($res as $row) {
	//     $datos[]=$row;
 //    }
 //    var_dump(json_encode($datos));
	// }
	}

}

?>