<!DOCTYPE html>
<html len="es">
 <head>
  <title>Administracion +Kotitas</title>
  <meta charset="UTF-8">

    
    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
	<link rel="stylesheet" href="styles/estiloindex.css">
    <link rel="stylesheet" href="styles/estilos.css">
     
       
 </head>
 <body>
  <header>
             
          <h1 class = "kotitas">+kotitas</h1>
      <nav class="menu">
        <ul>
            <li><a href="#" class="submenu">Gestion de Productos</a>
                 <ul>
                     <li><a href="index.php?action=productos">Agregar Productos</a></li>
                     <li><a href="#">Eliminar Producto</a></li>
                     <li><a href="#">Buscar Producto</a></li>
                 </ul>
            </li>
            
            <li><a href="#"> Gestion Usuarios</a>
                <ul>
                     <li><a href="#">Gerente</a></li>
                     <li><a href="#">Cliente</a></li>
                 </ul>
            </li>
            
            <li><a href="#">Gestion Avisos</a>
                  <ul>
                     <li><a href="#">Crear Anuncio</a></li>
                     <li><a href="#">Modificar Anuncio</a></li>
                 </ul>
            </li>
            
            <li><a href="#">Eliminar Anuncio</a></li>
        </ul>
    </nav>

    </header>

   <section>
       
            
            <?php 
       
                
                                
                $url = new MvcController();
                
                if(!isset($_GET["action"])){
                    
                    echo "variale vacia ";
                }else{
                    
                    $url -> enlacesPaginaController();
                }
                
                    
                    
        
            ?>
    
       
   
  
  </section>

    <footer>

    <div class="container-footer">
      
      <div class="columna1">
        <h2> Quienes Somos </h2>
        <p> La visión de una empresa es una declaración o manifestación que indica hacia dónde se dirige una empresa o qué es aquello en lo que pretende convertirse en el largo plazo.</p>
      </div>

      <div class="columna2">
        <h2>Redes Sociales</h2>
        
        <div class="row">
          <img src="../img/fb.png" >
          <label >Facebook</label>
        </div>
        
        <div class="row">
          <img src="../img/twi.png" >
          <label >Twitter</label>
        </div>

        <div class="row">
          <img src="../img/insta.png" >
          <label>Instagram</label>
        </div>		 

      </div>
      
      <div class="columna3">
        <h2>Informacion de contacto</h2>
        
                       <li>temuco, region de la araucania, Chile</li>
                       <li>calle caupolican #325</li>
                       <li>telefono: (452)2608637</li>
                       <li>celular: +569 73230266</li>
      </div>

    </div>
  </footer>
 </body>
</html>