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

    $query = "SELECT * FROM productos WHERE producto NOT LIKE '' ORDER By id_producto LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM productos WHERE id_producto LIKE '%$q%' OR producto LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
                        <td>id</td>
    					<td>productos</td>
    					<td>precio</td>
                        <td>stock</td>
    					<td>descripcion</td>
                        <td>seccion</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
                        <td>".$fila['id_producto']."</td>
    					<td>".$fila['producto']."</td>
    					<td>".$fila['precio']."</td>
                        <td>".$fila['cantidad']."</td>
    					<td>".$fila['descripcion']."</td>
                        <td>".$fila['seccion']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="No tenemos ese producto :(";
    }


    echo $salida;

    $conn->close();



?>