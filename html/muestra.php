<?php 

$id = $_GET['id'];
$host = "localhost";
  $user = "root";
  $pw= "";
  $db = "web_de_ventas";
  $id = $_GET['id'];

  $con = mysqli_connect($host,$user,$pw, $db) or die ("no se pudo conectar a la base de datos");
 $query = "SELECT * FROM productos WHERE id_producto = '$id'";


    $resultado = mysqli_query($con, $query);

    echo "<table >
            <tr> <td>";
    

    while ( $fila = mysqli_fetch_array($resultado)) {
     
   echo "<left>";

    echo "<br>$fila[producto] <br>";
//    header('Content-Type: image/jpeg');
  //  echo base64_encode($fila['imagenes']);
    //    header('Content-Type: text/html');
      ?>          
<img width="50px" height="50px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagenes']); ?>"/></a>

<?php
      echo "</left>";
       echo "<left>";
    echo "<br>$fila[precio] <br><br>";
     echo "</left>";

  echo "<left>";
  echo "DESCRIPCION <br>";
    echo "$fila[descripcion]<br>";
    echo "</left>";
    
    
  }
  echo "</td></tr></table>";


?>


