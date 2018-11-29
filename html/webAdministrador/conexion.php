 <?php 
   // try{
   //         $conexion =  new PDO('mysql:host=localhost dbname=web_de_ventas','root','');
   //     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //   $conexion->exec("SET CHARACTER SET UTF8");
    //}catch(Exception $e){
    //    
    //    echo 'error linea ' . $e->getLine();
    //    
    //}
$conexion = mysqli_connect("localhost", "root", "", "web_de_ventas");