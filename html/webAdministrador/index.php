
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


    </header>
  <nav>
    <ul class="navegación">
       <ul class="menu" >         
           
           <li><a href="#">Productos</a>
           <li><a href="#">Usuarios</a>
           <li><a href="#">Gestiónar Publicaciones</a>
           <li><a href="#">Cerrar Sesion</a>
            
        </ul>
    </ul>
    
    </nav>

   <section>
       
            
            <?php 
            include('agregar.php');
        
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