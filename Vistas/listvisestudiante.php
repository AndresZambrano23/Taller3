<?php 

include '../controladores/controlerestudiante.php';

if(isset($_REQUEST['cedula']) && !empty($_REQUEST['cedula'])){

    $cedula=$_REQUEST['cedula'];
    $objLogin=new informacionestudiante();
    $objLogin->listarestudiante($cedula);
}else{
    echo "La cedula no existe";
}





?>
