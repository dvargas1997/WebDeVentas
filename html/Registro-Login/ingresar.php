<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "web_de_ventas";
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "no se ha podido conectar a la base de datos" );

	$nombre = $_POST["usuario"];
	$pass = $_POST["pass"];
    $passmd5= md5($pass);
	

        
	$consulta = ("SELECT usuario FROM clientes WHERE usuario='$nombre' AND contrasena='$passmd5'");
    
    
    
    $rs= mysqli_query($conexion,$consulta);
	$fila= mysqli_num_rows($rs);
    
    if ($fila>0){
        session_start();
		$_SESSION['user'] = $nombre;
		header("location:../index2.html");
    }
    else{
        echo "error en la autentificacion";
    }   
?>