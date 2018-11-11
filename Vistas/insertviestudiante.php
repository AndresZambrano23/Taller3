<?php 

include '../controladores/controlerestudiante.php';

if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['direccion']) && !empty($_POST['direccion']) &&
	isset($_POST['telefono']) && !empty($_POST['telefono']) &&
	isset($_POST['idjor']) && !empty($_POST['idjor']) &&
	isset($_POST['idpro']) && !empty($_POST['idpro']) &&
	isset($_POST['cedula']) && !empty($_POST['cedula'])){

    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $idjor=$_POST['idjor'];
    $idpro=$_POST['idpro'];
    $cedula=$_POST['cedula'];
    $objLogin=new informacionestudiante();
    $objLogin->add_estudiante($cedula,$nombre,$direccion,$telefono,$idjor,$idpro);
}else{
    echo "Por favor registre todos los campos";
}





?>
