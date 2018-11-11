<?php 

include '../controladores/controlerprograma.php';

if(isset($_REQUEST['programa']) && !empty($_REQUEST['programa'])){

    $programa=$_REQUEST['programa'];
    $objLogin=new informacionprograma();
    $objLogin->listarprograma($programa);
}else{
    echo "EL programa no existe";
}





?>