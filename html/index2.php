<?php
session_start();
if(@!$_SESSION['user']){
	header("location:index.html");
}
?>
<!DOCTYPE html>
<html len="es">
 <head>
  <title>+Kotitas</title>
  <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
	<link rel="stylesheet" href="Style/estilousuario.css">
 <script src="jquery.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
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
        <li><a href="#">Productos</a>
          <ul class="submenu">
              <li><a href="#">Vestuario</a>
              <ul>
                <li><a href="vestuarioperro.html">Perros</a></li>
                <li><a href="vestuariogato.html">Gatos</a></li>
                <li><a href="vestuariootros.html">otros</a></li>
              </ul>
              </li>

                <li><a href="#">Accesorios</a>
                <ul>
                <li><a href="accesorioperro.html">Perros</a></li>
                <li><a href="in.html">Gatos</a></li>
                <li><a href="accesoriootros.html">otros</a></li>
              </ul>
              </li>


             <li><a href="#">Alimentos</a>
             <ul>
                <li><a href="alimentoperro.html">Perros</a></li>
                <li><a href="alimentogato.html">Gatos</a></li>
                <li><a href="alimentootros.html">otros</a></li>
         </ul>
         </li>
</ul>
       </li>
		 <li><a href="">Registro Mascotas</a></li>
		 <li><a href="Registro-Login/cerrarsesion.php">Cerrar Sesión</a></li>
        </nav>

     <section id="contenedor">
      <center>
          <h5>Artículos Destacados</h5>
        </center>
        <center>
          <img src="http://www.fotoestudiomonterrey.com/wp-content/uploads/2017/11/servicio-fotografico-de-accesorios-para-mascotas1.jpg" width="320" height="350">

          <img src="http://www.fotoestudiomonterrey.com/wp-content/uploads/2017/11/servicio-fotografico-de-accesorios-para-mascotas6.jpg" width="320" height="350">
        </center>

        <br>

          <section id="Noticias">
          <article id="Izquierda">
                  <center>
                    <h6>MASCOTAS GEEK PARA ESTA NAVIDAD</h6>
                    <img src="https://i1.wp.com/culturageek.com.ar/wp-content/uploads/2017/12/Culturageek.com_.ar-Mascotas-Geek-Navidad-0-e1513968113690.jpg?resize=1000%2C500" width="400" height="200">
                  </center>
                  <center>
                    <h7>Se acerca Navidad y los pequeños preparan la carta para Papá Noel en donde le piden una mascota como regalo ¿y ahora? No te preocupes, en Cultura Geek te presentamos a los 10 mejores animalitos geek para que regales en esta Noche Buena. ¡Conocelas en esta nota!</h7>
                  </center>
          </article>
          <article id="Centro">
                  <center>
                    <h8>DEPORTES PARA TU MASCOTA</h8>
                    <img src="https://misanimales.com/wp-content/uploads/2015/11/deportes-para-perros.jpg" width="400" height="200">
                  <center>
                    <H9>Hay diferentes tipos de deporte que tu perro puede practicar. De hecho, hay deportes para perros exclusivos para ellos. Como siempre, te lo vamos a contar.</H9>
                  </center>
                  </center>
          </Article>
          <article id="novedades">
            Novedades

        </article>
        </section>

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