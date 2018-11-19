<!DOCTYPE html>
<html len="es">
 <head>
  <title>Administracion +Kotitas</title>
  <meta charset="UTF-8">

    
    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
	
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme" rel="stylesheet">
    <meta name ="viewport" content="width=width-device, initial-scale=1">
    
    
    <script src="../bootstrap/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="styles/estiloindex.css" rel="stylesheet">
       
 </head>
 <body>
  <header>
             
          <h1 class = "kotitas">+kotitas</h1>
      <nav class="menu">
        <ul>
            <li><a href="#" class="submenu">Gestion de Productos</a>
                 <ul>
                     <li><a href="index.php?action=productos">Agregar Productos</a></li>
                     <li><a href="mostrarprductos.php">Eliminar Producto</a></li>
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
           <!---- FORMULARIO BUENNOO -->
           
            <div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="insertar.php" autocomplete="off">
				<div class="form-group">
					<label for="producto" class="col-sm-2 control-label">NOMBRE PRODUCTO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="producto" name="producto" placeholder="producto" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="precio" class="col-sm-2 control-label">PRECIO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label for="SECCION" class="col-sm-2 control-label">SECCION</label>
					<div class="col-sm-10">
						<select class="form-control" id="SECCION" name="SECCION">
							<option value="PERROS">PERROS</option>
							<option value="GATOS">GATOS</option>
							<option value="ROEDORES">ROEDORES</option>
							<option value="AVES">AVES</option>
							<option value=""></option>
							<option value="EXOTICOS">EXOTICOS</option>
						</select>
					</div>
				</div>
				<div class="form-group">
				    <label for="DESCRIPCION" class="col-sm-2 control-label" >DESCRIPCION</label><br>
                    <TEXTAREA id="DESCRIPCION" class="form-control" name ="descripcion" placeholder="DESCRIPCION DEL PRODUCTO"></TEXTAREA>
				</div>
				
		
	
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
           
           <?php 
                include 'mostrarprductos.php'
       
            ?>
            <!------------------------------------------------------------->
            <!-----------------------Agregar producto --------------------->
            <!--
            <div class="contenedor">	
            <form action="insertar.php" class="form" method="post">
                <div class="form-header">
                    <h1 class="form-title">INGRESAR PRODUCTOS</h1>
                </div>
                <label for="nombre" class="form-label" >NOMBRE PRODUCTO</label>
                <input type="text" id="nombre" class="form-input" name="producto" placeholder="NOMBRE DE PRODUCTO">

                <label for="CATEGORIA" class="form-label" >PRECIO</label>
                <input type="text" id="CATEGORIA" class="form-input" name="precio" placeholder="PRECIO">
                
                <label for="CATEGORIA" class="form-label" >CANTIDAD</label>
                <input type="text" id="CATEGORIA" class="form-input" name="cantidad" placeholder="CANTIDAD">

                <label for="DESCRIPCION" class="form-label" >DESCRIPCION</label>
                <TEXTAREA id="DESCRIPCION" class="form-textarea" name ="descripcion" placeholder="DESCRIPCION DEL PRODUCTO"></TEXTAREA>

                <input type="submit" class="btn-submit" value="AGREGAR PRODUCTO"> 
            </form>
		</div> -->
        
	    <!------------------------------------------------------------->
        <!------------------------------------------------------------->
        <!---                    MOSTRAR DATOS                     ---->
        <!------------------------------------------------------------->
        <!------------------------------------------------------------->
        
        <?php 
            
            
       
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