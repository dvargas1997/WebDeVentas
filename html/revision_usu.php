<?php
include_once("conecta_prod.php");
$consulta = laconsulta();
?>
<!DOCTYPE html>
<html leng="es">
	<head>
		<title>index</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
		<link rel="stylesheet" href="Style/estiloindex.css">
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
         <li><a href="index.html">Nosotros</a></li>
         <li><a href="#">Productos</a>
         <ul class="submenu">
           <li><a href="#">Vestuario</a></li>
           <ul>
              <li><a href="vestuarioperro.html">Perros</a></li>
               <li><a href="#">Gatos</a></li>
                <li><a href="#">otros</a></li>
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

         <li><a href="#">Contacto</a></li>
		 <li><a href="Registro-Login/formulario2.html">Crear Cuenta</a></li>
		 <li><a href="Registro-Login/formulario.html">Iniciar Sesión</a></li>
        </nav>
	<section>
		<div class="row">
			<div class="col-xs-12">
			<h3>Lista base de datos</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="250">Producto</th>
							<th width="200">Precio</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while($persona = $consulta->fetch_assoc())
						{
						?>
						<tr>
							<td><?php echo $persona["producto"]; ?></td>
							<td><?php echo $persona["precio"]; ?></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
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