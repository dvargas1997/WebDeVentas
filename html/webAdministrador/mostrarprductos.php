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
                <td> <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagenes']); ?>"/> </td>

            </tr>
            <?php } ?>
            
        </table>
    </div>
