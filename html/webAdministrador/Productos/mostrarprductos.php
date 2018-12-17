<?php 
  require_once 'conexion.php';
  
  ?>
   <div class="container">
        <table class="table table-hover table-bordered">
            <tr class="danger">
              <th>ID</th>
              <th>NOMBRE</th>
              <th>PRECIO</th>
              <th>STOCK</th>
              <th>SECCIÓN</th>
              <th>IMAGEN</th>

            </tr>
            <?php 
                require_once 'conexion.php';

                $sql = "SELECT id_producto, producto, precio, cantidad, seccion, imagenes FROM productos";
                $retornosql = mysqli_query($conexion,$sql);
                while($mostrar = mysqli_fetch_array($retornosql)){

            ?>
            <tr>
                <td><?php echo $mostrar['id_producto']; ?></td>
                <td><?php echo $mostrar['producto']; ?></td>
                <td><?php echo $mostrar['precio']; ?></td>
                <td><?php echo $mostrar['cantidad']; ?></td>
                <td><?php echo $mostrar['seccion']; ?></td>
                <td> <img width="100px" height="100px;" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagenes']); ?>"/> </td>
                
            
                <td><?php echo '<a class="btn btn-sm btn-danger" href="index.php?action=actPro&eliminar='.$mostrar['id_producto'].'" >eliminar</a>' ?>
                </td>
                   <?php 
                        if(!isset($_GET['eliminar'])){
                            
                        }else{
                             $eliminar = $_GET['eliminar'];
                            if(isset($eliminar)){
                            $eliminapro =  "DELETE FROM productos WHERE id_producto = '$eliminar'";
                            mysqli_query($conexion,$eliminapro); 
                }
                        }
                    ?>
                <td><?php
                    echo '<a class="btn btn-sm btn-warning" href="index.php?action=actPro&editar='.$mostrar['id_producto'].'" >Editar</a>'
                    ?>
                </td>

            </tr>
            <?php } ?>
            
        </table>
    </div>
