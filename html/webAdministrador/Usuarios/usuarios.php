<?php 
  require 'conexion.php';
    if(!isset($_GET['guardar'])){
                
            }else{
                $guardar = $_POST['guardar'];
                
                $nombre = $_POST['nombre'];
                 $apellido = $_POST['apellido'];
                 $usuario= $_POST['usuario'];
                 $telefono= $_POST['telefono'];
                 $email= $_POST['email'];
                 $tipo= $_POST['tipo'];
                
                
                $consulta = "Update clientes Set Nombre_Cliente = '$nombre' , Apellido = '$apellido', USUARIO = '$usuario', nro_telefono = '$telefono', email='$email' , tipo_usuario = '$tipo' Where id = '$guardar'";
                
                $ejecuta = mysqli_query($conexion,$consulta);
            }
  
  ?>
   <div class="container">
     
      
        <table class="table table-hover table-bordered">
            <tr class="danger">
              <th>ID</th>
              <th>NOMBRE</th>
              <th>APELLIDO</th>
              <th>USUARIO</th>
              <th>TELEFONO</th>
              <th>E-MAIL</th>
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
                       
                <td><?php echo '<a class="btn btn-sm btn-danger" href="index.php?action=usuarios&eliminar='.$mostrar['id_cliente'].'" > <i class="fas fa-trash-alt"></i></a>'; ?></td>
                      
                <td><?php
                    echo '<a class="btn btn-sm btn-warning" href="index.php?action=usuarios&editar='.$mostrar['id_cliente'].'" > <i class="fas fa-pencil-alt"></i></a>';
                    ?>
                </td>
                
            </tr>
            <?php
                
            if(!isset($_GET['editar'])){
             
            }else{
             
                $editar = $_GET['editar'];
                
                echo '<tr class="danger">';
                
                   
            echo   " <form class='form-horizontal' method='POST' action='Usuarios/editar.php' autocomplete='off' >
                    <div class='form-group'>
                       <td rowspand = '2'>
                           <label for='nombre'>". $mostrar['id_cliente'] ."</label>
                       </td>";
                        
            echo '<td>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="'. $mostrar['Nombre_cliente'].'" required>
                    </td>';
                        
                        
            echo  '<td>
                     <input type="text" class="form-control" id="producto" name="apellido" placeholder="" value="'.$mostrar['Apellido'].'" required></td>';
                    
                        
               echo '          <td>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" value="'.  $mostrar['USUARIO'].'" required>
                              
                          </td>';
                        
                        
               echo '        <td>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" value="'.  $mostrar['nro_telefono'] .'" required>
                            
                        </td>'  ;                       
                        
                        
                echo '     <td>
                            <input type="text" class="form-control" id="email" name="email" placeholder="" value="'. $mostrar['e_mail'] .'" required>
                        </td>';
                            
                        
                echo    '<td>
                            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="" value="'. $mostrar['tipo_usuario']. '" required>
                             
                         </td>';
                      
                /*<a href="index.php?action=usuarios&guardar='.$editar.'" class="btn btn-primary">Guardar</a>*/
            
               echo ' <td>
						
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <input type="hidden"   name="id"  value="'. $mostrar['id_cliente']. '" required>
                             
                    </td>
                         <td>
                         <a class="btn btn-danger" href="index.php?action=usuarios"> cancelar </>
                         </td>
                        
                        
                    </div>
                </form>
            </tr>  '; 
                
            }
            
            
              
            
            }
            if(!isset($_GET['eliminar'])){
                
            }
                
             else{  
                 $eliminar = $_GET['eliminar'];
                if(isset($eliminar)){
                $_DELETE_SQL =  "DELETE FROM clientes WHERE id_cliente = '$eliminar'";
                mysqli_query($conexion,$_DELETE_SQL); 
                }
            }
            
           // $editar = $_GET['editar'];

            
           
            ?>
            
        </table>
       
    </div>
