<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<?php 
      	$db_host="localhost";
      	$db_nombre="usuarios";
      	$db_usuario="root";
      	$db_contra="";

      	$conexion = mysqli_connect($db_host,$db_usuario,
      		$db_contra,$db_nombre);
      	if(mysqli_connect_errno()){
      		 echo "Fallo al conectar la base de datos";

      		 exit();
      	}

      	$consulta="SELECT * FROM DATOS";
      	$resultado = mysqli_query($conexion,$consulta);

      	$fila =  mysqli_fetch_row($resultado);

        echo $fila[0] . " ";
        echo $fila[1]. " ";
        echo $fila[2]. " ";
        echo $fila[3]. " ";


	 ?>
	
</body>
</html>