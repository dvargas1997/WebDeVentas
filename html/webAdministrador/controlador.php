<?php 
    class muestranos{
        
         $pro = $_GET['productos'];
        $usu = $_GET['usuarios'];
        
    
        function mostrar(){
           
            
            if(isset($pro) or isset($usu)){
                
                
                
                if($pro == 'productos'){
                    include 'mostrarproductos.php';
                }
            }
            
            }
        }

    ?>