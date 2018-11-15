<?php 
        include 'conexion.php';
        
        $producto = $_POST["producto"];
        $precio = $_POST["precio"];
        $cantidad =  $_POST["cantidad"];
	    $descripcion = $_POST["descripcion"];
	
    
	$insertar = "INSERT INTO productos(producto,precio,cantidad,descripcion)
    VALUES ('$producto','$precio','$cantidad','$descripcion')";
    
   $resultado = mysqli_query($conexion,$insertar);
    
    if(!$resultado){
        echo "error al insertar el producto";
    }else{
        echo "producto insertado correctamente";
    }
    mysqli_close($conexion);
    