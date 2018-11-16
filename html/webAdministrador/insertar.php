<?php 
 include ('conexion.php');

    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    $descripcion = $_POST["descripcion"];
    $seccion = $_POST["SECCION"];

    $sql = "INSERT INTO productos (producto , precio , cantidad, descripcion, seccion) VALUES ('$producto', '$precio', '$cantidad', '$descripcion','$seccion')";

    $verificar_producto = mysqli_query($conexion, "SELECT * FROM productos WHERE producto = '$producto';");
    
    if(mysqli_num_rows($verificar_producto) > 0 ){
        
        //include 'alerta.php';
        echo '<script languaje = "javascript">
                alert("el producto ya esta registrado"); 
                window.history.go(-1);
              </script>';
        exit;   
    }
    
    $ejecuta = mysqli_query($conexion,$sql);

    if(!$sql){
        echo '<script languaje = "javascript">
                alert("Error al registrar Producto"); 
                window.history.go(-1);
              </script>';
    }else{
       
        echo '<script languaje = "javascript">
                alert("Producto Registrado");
                window.history.go(-1);
              </script>';
        
    }
    mysqli_close($conexion);

?>