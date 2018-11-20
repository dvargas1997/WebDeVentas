<!DOCTYPE html>
<html len="es">
 <head>
  <title>+Kotitas</title>
  <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
	<link rel="stylesheet" href="Style/estilousuario.css">


 </head>
 <body>


  <header>
                <br>
                <br>
                <br>
          <h1>+kotitas</h1>


        </header>
  <nav>
    <ul class="navegación">
       <ul class="menu" >
         <li><a href="">Productos</a>
         <ul class="submenu">
           <li><a href="#">Vestuario</a></li>
           <ul>
              <li><a href="vestuarioperro.html">Perros</a></li>
               <li><a href="">Gatos</a></li>
                <li><a href="">otros</a></li>
           </ul>
           <li><a href="#">Accesorios</a></li>
           <ul>
              <li><a href="accesorioperro.html">Perros</a></li>
               <li><a href="in.html">Gatos</a></li>
                <li><a href="#">otros</a></li>
           </ul>
           <li><a href="#">Alimentos</a></li>
           <ul>
              <li><a href="#">Perros</a></li>
               <li><a href="#">Gatos</a></li>
                <li><a href="#">otros</a></li>

           </ul>
</ul>
       </li>
        
            
       </li>
		 <li><a href="#">Cambiar Cuenta</a></li>
		 <li><a href="#">Cerrar Sesión</a></li>
        </nav>
 
   <section>
<?php
  $host = "localhost";
  $user = "root";
  $pw= "";
  $db = "web_de_ventas";

  $con = mysqli_connect($host,$user,$pw, $db) or die ("no se pudo conectar a la base de datos");
//  mysqli_select_db($db,$con) or die (" no se encontro la base de datos");
    $query = "SELECT * FROM  productos";
    $resultado = mysqli_query($con, $query);
    while ( $fila = mysqli_fetch_array($resultado)) {
   echo "<left>";
    echo "$fila[producto] ";
    echo "<img src='.imagenes/$fila[imagenes]''>";
      echo "</left>";
       echo "<left>";
    echo "$fila[precio] <br><br>";
     echo "</left>";
  echo "<left>";
  echo "DESCRIPCION <br>";
    echo "$fila[descripcion]<br><br><br>";
    echo "</left>";
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
          <img src="img/fb.png" >
          <label >Facebook</label>
        </div>
        
        <div class="row">
          <img src="img/twi.png" >
          <label >Twitter</label>
        </div>

        <div class="row">
          <img src="img/insta.png" >
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