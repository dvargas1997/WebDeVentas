<?php 

    class enlacesPagina{
    
        public static function enlacesPaginaModel($enlacesModel){
            
            if($enlacesModel == "productos" || 
               $enlacesModel == "inicio" ||
              $enlacesModel == "publicaciones" ){
                
                
                $module = "view/modules/".$enlacesModel.".php";
                
            }
            
                return $module;
            
        }
    
    }

?> 