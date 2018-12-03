<?php 
  include 'config/conexion.php';
  
  ?>
   <div class="container">
      
        <table class="table table-hover table-bordered">
            <tr class="danger">
              <th>ID</th>
              <th>NOMBRE</th>
              <th>APELLIDO</th>
              <th>USUARIO</th>
              <th>E-MAIL</th>
              <th>TELEFONO</th>
              <th>TIPO USUARIO</th>

            </tr>
            <?php 

                $sql = "SELECT id_cliente, Nombre_cliente, Apellido, USUARIO, e_mail, nro_telefono, tipo_usuario FROM clientes";
                $retornosql = mysqli_query($conexion,$sql);
                while($mostrar = mysqli_fetch_array($retornosql)){
                
            ?>
            <tr>
                
                <td><?php echo $mostrar['id_cliente']; ?></td>
                <td><?php echo $mostrar['Nombre_cliente']; ?></td>
                <td><?php echo $mostrar['Apellido']; ?></td>
                <td><?php echo $mostrar['USUARIO']; ?></td>
                <td><?php echo $mostrar['nro_telefono']; ?></td>
                 <td><?php echo $mostrar['e_mail']; ?></td>
                <td><?php echo $mostrar['tipo_usuario']; ?></td>
                       
                <td><?php echo '<a class="btn btn-sm btn-danger" href="usuarios.php?eliminar='.$mostrar['id_cliente'].'" >eliminar</a>' ?></td>
                      
                <td><?php
                    echo '<a class="btn btn-sm btn-warning" href="usuarios.php?editar='.$mostrar['id_cliente'].'" >Editar</a>'
                    ?>
                </td>
            </tr>
            
               
            <?php 
            }
            
            ?>
            
        </table>
       
    </div>
