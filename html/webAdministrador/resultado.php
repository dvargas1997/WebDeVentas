<?php
 session_start();
if(@!$_SESSION['user']){
	header("location:../index.html");
}
?>
<!DOCTYPE html>
<html len="es">
 <head>
  <title>Administracion </title>
  <meta charset="UTF-8">

    
    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
	
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme" rel="stylesheet">
    <link rel="stylesheet" href="styles/estiloindex.css" rel="stylesheet">
    
    <meta name ="viewport" content="width=width-device, initial-scale=1">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jquery/jquery-3.3.1.min.js"></script>

    
     
       
 </head>
 <body>
  <header>
             
          <h1 class = "kotitas">PetWorld</h1>
      <nav class="menu">
        <ul>
            <li><a href="index.php?action=productos" class="submenu">Gestion de Productos</a>
                 <ul>
                     <li><a href="index.php?action=addp">Agregar Productos</a></li>
                     <li><a href="index.php?action=eliminarp">Ver Productos</a></li>
                 </ul>
            </li>
            
            <li><a href="index.php?action=usuarios"> Gestion Usuarios</a>
               
            </li>
            
            <li><a href="#">Gestion Avisos</a>
                  <ul>
                     <li><a href="#">Crear Anuncio</a></li>
                     <li><a href="#">Modificar Anuncio</a></li>
                 </ul>
            </li>
            
            <li><a href="#">Eliminar Anuncio</a></li>
			
			<li><a href="../registro-login/cerrarsesion.php">Cerrar Sesion</a></li>
        </ul>
    </nav>

    </header>

<section class="principal">


	<div class="formulario">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>

		
	</div>

	<div id="datos"></div>
	
	
</section>



<script type="text/javascript" src="iava/jquery.min.js"></script>
<script type="text/javascript" src="iava/main.js"></script>
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