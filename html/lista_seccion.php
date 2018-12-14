<?php 

$tipo = $_GET['seccion'];
$host = "localhost";
  $user = "root";
  $pw= "";
  $db = "web_de_ventas";
  $tipo = $_GET['seccion'];

  $con = mysqli_connect($host,$user,$pw, $db) or die ("no se pudo conectar a la base de datos");
 $query = "SELECT * FROM productos WHERE seccion = '$tipo'";


    $resultado = mysqli_query($con, $query);

    echo "<table >
            <tr> <td>";
      $cf= 0;

    while ( $fila = mysqli_fetch_array($resultado)) {
     
   echo "<left>";

    echo "<br>$fila[producto] <br>";
//    header('Content-Type: image/jpeg');
  //  echo base64_encode($fila['imagenes']);
    //    header('Content-Type: text/html');

    echo "<a href = 'muestra.php?id=".$fila['id_producto']."'>";
?>      
<img width="50px" height="50px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagenes']); ?>"/></a>

<?php
  


    }
    
  
  echo "</td></tr></table>";


?>

