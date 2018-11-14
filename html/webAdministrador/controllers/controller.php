<?php

class MvcController{
    #llamar a la plantilla del index;
    
    public function index(){
        include "view/template.php";
    }
    
    #intereccion a traves de las url
    public function enlacesPaginaController(){
        
            
             
            $enlacesController = $_GET["action"];
            
            $respuesta = enlacesPagina::enlacesPaginaModel($enlacesController);
            
            include $respuesta;
        
    }
        
}
?>