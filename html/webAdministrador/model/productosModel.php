<?php
    class productosModel{

        private $db;
        private $productos;
        
        public function __construc(){
            require_once('conexion.php');
            
            this->db = conectar::conexion();
            this->productos=array();
            
        }
        
        public function getProducto(){
            
            $consulta = $this->db->query("SELECT * FROM productos");
            
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                
                this->productos[]=$filas;
                
            }
            this->productos
            
        }
        
}

?>