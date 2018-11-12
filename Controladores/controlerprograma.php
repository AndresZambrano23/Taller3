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
    echo(json_encode($datos));
}
}

?>