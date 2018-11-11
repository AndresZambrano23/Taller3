<?php 
class Conexion extends PDO{


    public function __constructor(){
    
    
        try{
            parent::__constructor('mysql:host=localhost;dbname=tallerbd','root','');
            parent::setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch(Exeption $ex){
                echo "Error con la base de datos : ".$ex->getMessage();
            }
        
        }
    }




?>