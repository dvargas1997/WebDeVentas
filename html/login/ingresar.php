<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "web_de_ventas";
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "no se ha podido conectar a la base de datos" );

	$nombre = $_POST["usuario"];
	$pass = $_POST["pass"];
	
    if( isset($_POST["usuario"]) or isset($_POST["pass"])){
        header('formulario.html');
    }else{
        
	$consulta = ("SELECT usuario FROM clientes WHERE usuario='$nombre' AND contrasena='$pass'");
    
    $rs= mysqli_query($consulta);
	$row=mysqli_fetch_object($rs);
	$nr = mysqli_num_rows($rs);
         

        
        if($nr == 0){
	       echo "No ingreso";
	   }
	   else if($nr == 1) {
            header("Location:index.html");
	}
    }
	
	
	

   
?>