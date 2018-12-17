<?php 

	$conexion=mysqli_connect('localhost','root','','web_de_ventas');

 ?>
<!DOCTYPE html>
<html len="es">
 <head>
  <title>Alimento perros</title>
  <meta charset="UTF-8">

    
    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
	
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme" rel="stylesheet">
    <link rel="stylesheet" href="webadministrador/styles/estiloindex.css" rel="stylesheet">
    
    <meta name ="viewport" content="width=width-device, initial-scale=1">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    
     
       
 </head>
 <body>
  <header>
             
          <h1 class = "kotitas">PetWorld</h1>
      <nav class="menu">
        <ul>
            <li><a href="#" class="submenu">Alimentos</a>
                 <ul>
                     <li><a href="alimento_perros.php">Perros</a></li>
                     <li><a href="alimento_gatos.php">Gatos</a></li>
					 <li><a href="alimento_otros.php">Otros</a></li>
                 </ul>
            </li>
			<li><a href="#" class="submenu">Vestuario</a>
                  <ul>
                     <li><a href="vestuario_perros.php">Perros</a></li>
                     <li><a href="vestuario_gatos.php">Gatos</a></li>
					 <li><a href="vestuario_otros.php">Otros</a></li>
                 </ul>
            </li>
			<li><a href="#" class="submenu">Accesorios</a>
                  <ul>
                     <li><a href="accesorios_perros.php">Perros</a></li>
                     <li><a href="accesorios_gatos.php">Gatos</a></li>
					 <li><a href="accesorios_otros.php">Otros</a></li>
                 </ul>
            </li>
			<li><a href="../registro-login/cerrarsesion.php">Cerrar Sesion</a></li>
        </ul>
    </nav>

    </header>

   <section>
          
        <div class="container">
			<table class="tabla_datos">
				<tr>
					<td>Precio</td>
					<td>Cantidad</td>
					<td>Descripcion</td>
				</tr>

				<?php 
				$sql="SELECT * from productos WHERE seccion='GATOS' AND producto='comida'";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					<td><?php echo $mostrar['precio'] ?></td>
					<td><?php echo $mostrar['cantidad'] ?></td>
					<td><?php echo $mostrar['descripcion'] ?></td>
				</tr>
			<?php 
			}
			?>
	</table>

        </div>
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