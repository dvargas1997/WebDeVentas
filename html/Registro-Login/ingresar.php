<?php
session_start();
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "web_de_ventas";
	
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "no se ha podido conectar a la base de datos" );

	$nombre = $_POST["usuario"];
	$pass = $_POST["password"];
    $passmd5= md5($pass);
	

        
	$consulta = ("SELECT * FROM clientes WHERE usuario='$nombre' AND contrasena='$passmd5'");
	$consulta2 = ("SELECT * FROM clientes WHERE usuario='$nombre' AND contrasena='$passmd5' AND tipo_usuario='gerente'");
	$consulta3 = ("SELECT * FROM clientes WHERE usuario='$nombre' AND contrasena='$passmd5' AND tipo_usuario='admin'");
    
    $rs2= mysqli_query($conexion,$consulta2);
	$fila2= mysqli_num_rows($rs2);
	if ($fila2>0){
		echo '<script languaje = "javascript">
                alert("Bienvenido Gerente"); 
              </script>';
		$_SESSION['user'] = $nombre;
		header("location:../webGerente/indexGerente.php");
    }		
    else{
	$rs3= mysqli_query($conexion,$consulta3);
	$fila3= mysqli_num_rows($rs3);
	if ($fila3>0){
		$_SESSION['user'] = $nombre;
		header("location:../webAdministrador/index.php");
		echo '<script languaje = "javascript">
                alert("Bienvenido Administrador");
               </script>';
    }		
    else{
	$rs= mysqli_query($conexion,$consulta);
	$fila= mysqli_num_rows($rs);
    
    if ($fila>0){
		$_SESSION['user'] = $nombre;
		header("location:../WebUsuario.php");
		echo '<script languaje = "javascript">
                alert("Bienvenido Cliente");
               </script>';
    }
    else{
         echo '<script languaje = "javascript">
                alert("Error Al Autenticar"); 
                window.history.go(-1);
              </script>';
    }
  }
}  
?>