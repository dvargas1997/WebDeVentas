<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "web_de_ventas";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM clientes WHERE Nombre_cliente NOT LIKE '' ORDER By id_cliente LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM clientes WHERE id_cliente LIKE '%$q%' OR Nombre_cliente LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
                        <td>id</td>
    					<td>Nombre</td>
    					<td>Apellido</td>
                        <td>Usuario</td>
    					<td>Contrasena</td>
                        <td>Email</td>
						<td>Telefono</td>
						<td>Tipo</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
                        <td>".$fila['id_cliente']."</td>
    					<td>".$fila['Nombre_cliente']."</td>
    					<td>".$fila['Apellido']."</td>
                        <td>".$fila['usuario']."</td>
    					<td>".$fila['contrasena']."</td>
                        <td>".$fila['e_mail']."</td>
						<td>".$fila['nro_telefono']."</td>
						<td>".$fila['tipo_usuario']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="Ese cliente no existe :( ";
    }


    echo $salida;

    $conn->close();



?>