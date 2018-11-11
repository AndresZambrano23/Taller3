<?php 
include '../Modelos/programa.php';

class informacionprograma {

    function listarprograma($programa){
        $objModelo=new programa();
        $res=$objModelo->identificacionprograma($programa);
        $datos=$res->fetchAll();
        foreach ($res as $row) {
	    $datos[]=$row;
    }
    var_dump(json_encode($datos));
}
}

?>