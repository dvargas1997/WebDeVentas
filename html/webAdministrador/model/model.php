<?php 

    class enlacesPagina{
    
        public function enlacesPaginaModel($enlacesModel){
            
            if($enlacesModel == "productos" || 
               $enlacesModel == "inicio" ||
              $enlacesModel == "publicaciones" ){
                
                
                $module = "view/modules/".$enlacesModel.".php";
                
            }
            
                return $module;
            
        }
    
    }

?> 