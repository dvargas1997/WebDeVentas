<?php
include_once("conecta.php");
$consulta = laconsulta();
?>

<!DOCTYPE html>
<html leng="es">
	<head>
		<title>Gerente</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
		<link rel="stylesheet" href="../Style/estilogerente.css">
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
			<ul class="menu">
				<li><a href="#">Productos</a>
				<ul class="submenu">
					<li><a href="#">Revisar Precio</a></li>
					<li><a href="#">Revisar Cantidad</a></li>
					<li><a href="#">Revisar Usuarios</a></li>
				</ul>
			</ul>
		</ul>
	</nav>
	<section>
		<div class="row">
			<div class="col-xs-12">
			<h3>Lista base de datos</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="100">ID</th>
							<th width="250">Producto</th>
							<th width="200">Precio</th>
							<th width="200">Cantidad</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while($persona = $consulta->fetch_assoc())
						{
						?>
						<tr>
							<td><?php echo $persona["id_producto"]; ?></td>
							<td><?php echo $persona["producto"]; ?></td>
							<td><?php echo $persona["precio"]; ?></td>
							<td><?php echo $persona["cantidad"]; ?></td>
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