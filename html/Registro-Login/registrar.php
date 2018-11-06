<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "web_de_ventas";
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "no se ha podido conectar a la base de datos" );

	$nombre = $_POST["nom"];
    $apellido = $_POST["ape"];
    $usuario =  $_POST["usu"];
	$pass = $_POST["pass"];
    
    $email = $_POST["ema"];
    $tele = $_POST["tel"];
	
    
	$consulta = ("INSERT INTO clientes (Nombre_cliente,apellido,usuario, contrasena, e_mail,nro_telefono)
VALUES ('$nombre','$apellido','$usuario',MD5('$pass'), '$email','$tele');");
    
    $rs= mysqli_query($conexion,$consulta);
	
         

        

	
	
	