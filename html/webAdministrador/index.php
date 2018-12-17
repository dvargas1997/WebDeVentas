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

    
	
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme" rel="stylesheet">
    <link rel="stylesheet" href="styles/estiloindex.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    
    <meta name ="viewport" content="width=width-device, initial-scale=1">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    
     
       
 </head>
 <body>
  <header>
             
      <nav class="menu">    
        <ul>
            <li><a href="#" class="submenu">Gestion de Productos</a>
                 <ul>
                     <li><a href="index.php?action=insertPro">Agregar Productos</a></li>
                     <li><a href="index.php?action=actPro">Ver Productos</a></li>
                 </ul>
            </li>
            
            <li><a href="index.php?action=usuarios"> Gestion Usuarios</a>
               
            </li>
            
            
			<li ><a class="btn" href="../registro-login/cerrarsesion.php">Cerrar Sesion</a></li>
           
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i></button>
          </form>
    </nav>

    </header>
                

   <section>    
        
       
               
               <?php 
                
                
                  if(!isset($_GET['action'])){
                     echo "
                            
                        <div class='container'>
                           <div class='cold-md-2'>
                            <img  src='img/Admin.png' class='img-responsive img-circle' alt='administracion' width='90%'>
                           </div>
                        </div>


                            </div>";
                     
                  }
                      else{
                        
                                                                  
                        $accion = $_GET['action'];

                        if($accion == 'insertPro'){

                            include 'Productos/insertarproductos.php';

                        }elseif($accion == 'actPro'){

                            include 'Productos/mostrarprductos.php';
                            
                        }elseif($accion == 'usuarios'){

                            include 'Usuarios/Usuarios.php';

                        }else{
                            
                        }
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