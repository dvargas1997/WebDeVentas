<?php
          include_once '../conexion.php';
                $id = $_POST['id'];
                
                $nombre = $_POST['nombre'];
                 $apellido = $_POST['apellido'];
                 $usuario= $_POST['usuario'];
                 $telefono= $_POST['telefono'];
                 $email= $_POST['email'];
                 $tipo= $_POST['tipo'];
                
                
                $consulta = "Update clientes Set Nombre_Cliente = '$nombre' , Apellido = '$apellido', USUARIO = '$usuario', nro_telefono = '$telefono', e_mail='$email' , tipo_usuario = '$tipo' where id_cliente = '$id'";
                
                
                $ejecuta = mysqli_query($conexion,$consulta);
echo '<script languaje = "javascript"> 
        alert("Registro Modificado Con Exito");
        window.history.go(-2);
    </script>';
//header("location:../index.php?action=usuarios");
