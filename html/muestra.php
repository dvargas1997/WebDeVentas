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



    while ( $fila = mysqli_fetch_array($resultado)) {
     
   echo "<left>";

    echo "<font size = 6><left><br>$fila[producto] <br></left></font>";
echo "<br>";


 ?>          
<left><img width="300px" height="300px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagenes']); ?>"/></a></left>
<center>
<h2>Cantidad: <input type="text" name="numero"/></h2>
<br>
<button><a href="carrito2.php">Comprar</button>
 <button ><a href="WebUsuario.php">Volver</button></a>
</center>
<?php
    
    echo "<font size = 6><br>$ $fila[precio] <br><br></font>";

  echo "<font size = 4>DESCRIPCION :<br></font>";
    echo "<font size = 4>$fila[descripcion]<br></font>";

    
    
  }

echo "</left>";

?>
<br>
<br>

