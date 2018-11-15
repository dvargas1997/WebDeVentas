<?php 
    class conectar{
        
        public static function conexion(){
            
            try{
                $conexion = new PDO('mysql:host=localhost; dbname=web_de_ventas' ,'root','');
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET UTF8");
                
            }catch(Exception $e){
                
              die("Error! ".$e->getMessage());
                echo "Línea del error". $e->getLine();
            }
           return $conexion; 
        }
    }

?>