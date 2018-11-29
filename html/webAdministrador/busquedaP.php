  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme" rel="stylesheet">
    <link rel="stylesheet" href="styles/estiloindex.css" rel="stylesheet">
    
    <meta name ="viewport" content="width=width-device, initial-scale=1">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    
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
         </tr>
            <?php 
                $busqueda = $_REQUEST['busqueda'];
                if(empty($busqueda)){
                    echo "<script>
                            alert('no se encontro la varible busqueda');
                            window.history.go(-1);
                        </script>";
                }

                $sql = "SELECT id_producto, producto, precio, cantidad, seccion FROM productos";
                $retornosql = mysqli_query($conexion,$sql);
                while($mostrar = mysqli_fetch_array($retornosql)){

            ?>
            <tr>
                <td><?php echo $mostrar['id_producto']; ?></td>
                <td><?php echo $mostrar['producto']; ?></td>
                <td><?php echo $mostrar['precio']; ?></td>
                <td><?php echo $mostrar['cantidad']; ?></td>
                <td><?php echo $mostrar['seccion']; ?></td>

            </tr>
            <?php } ?>
            
        </table>
    </div>