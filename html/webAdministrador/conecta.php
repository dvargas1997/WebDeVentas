<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "web_de_ventas";
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "no se ha podido conectar a la base de datos" );
    
	$consulta = "";
    
	function laconsulta()
	{
		global $conexion, $consulta;
		$sql = "SELECT * FROM productos";
		return $conexion->query($sql);
	}
?>