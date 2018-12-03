<?php 
    include 'conifg/conexion.php';
    
    $eliminar = $_GET['eliminar'];
    $editar = $_GET['editar'];
    
    if(isset($eliminar)){
        $_DELETE_SQL =  "DELETE FROM clientes WHERE id_cliente = '$eliminar'";
        mysqli_query($conexion,$_DELETE_SQL); 
    }
    header('location:index.php');
?>