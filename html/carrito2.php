

<center><font size= 6><p>Detalle de la Compra</p></font></center>

<?php

session_start();


 



$p = $_GET['producto'];
  $c = $_GET['cantidad']; 

  $pre = $_GET['precio']; 
  $total = number_format((int)$c * $pre,3) ;
  
  echo "<table style='position:absolute;top:100px;left:500px;' border =1 >";
echo "<tr>";
echo "  <center><th> Descripción  </th></center>";
echo "  <center><th> Cantidad </th></center>";
echo "  <th> Precio unitario  </th>";
echo "  <th> Total </th>";
echo "</tr>";
echo "<tr>";
echo "<center>";
echo "<td> " . $p . "</td>";
echo "<td> " . $c . "</td>";
echo "<center><td> " . $pre . "</td> </center>";
echo "<td>". $total."</td>";

echo "</center>";



echo "</tr>";
echo "</table>";
echo "</center>";
?>

</tr>
<?php


?>


<br>
<br>





 <head>
  <title>+Kotitas</title>
  <meta charset="UTF-8"/>
 
    <link href="https://fonts.googleapis.com/css?family=Copse|Gochi+Hand|Handlee|Playfair+Display+SC" rel="stylesheet">
  <link rel="stylesheet" href="Registro-Login/estilo.css">
 </head>
 <body>
  <header>
              

  
        </header>
  <nav> 
  
</ul>
       </li>
        
     
  <section>
<!--lee codigo javascript-->
 <script type="text/javascript" src="js/javascript.js"></script>
 
 <!--lee codigo css-->
 
 </head>
 
 <left>
 <body>
 <div id="todo" class="todoNo">
 <div id="menu" class="menuNo">
 
 
 <!--Producto del 1 al 9-->
 <div id="div1" name="DIVS"></div>
 <div id="div2" name="DIVS"></div>
 <div id="div3" name="DIVS"></div>
 <div id="div4" name="DIVS"></div>
 <div id="div5" name="DIVS"></div>
 <div id="div6" name="DIVS"></div>
 <div id="div7" name="DIVS"></div>
 <div id="div8" name="DIVS"></div>
 <div id="div9" name="DIVS"></div>
 

 
 
 <!--zona de compra, tablas, formularios, etc.-->
 <div id="divZonaCompra" class="divZonaCompraNo">
 

 
 
 <!--Datos personales--> 
 <div id="divDatos" class="divsNo">
 <p><b>Introduzca sus datos personales:</b></p>
 
 <div id="divDatosPersonales0">
 <div id="divDatosPersonales1">
 <label>Nombre completo:</label><br/>
 <input type="text" id="nombre" value="" size="26" /><br/>
 
 
 
 
 <label>Fecha de nacimiento:</label><br/>
 <select id="fechaNacimientoDia">
 <option value=""> dia </option>
 <option value="">      dia</option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 <option value="6">6</option>
 <option value="7">7</option>
 <option value="8">8</option>
 <option value="9">9</option>
 <option value="10">10</option>
 <option value="11">11</option>
 <option value="12">12</option>
 <option value="1">13</option>
 <option value="2">14</option>
 <option value="3">15</option>
 <option value="4">16</option>
 <option value="5">17</option>
 <option value="6">18</option>
 <option value="7">19</option>
 <option value="8">20</option>
 <option value="9">21</option>
 <option value="10">22</option>
  <option value="3">23</option>
 <option value="4">24</option>
 <option value="5">25</option>
 <option value="6">26</option>
 <option value="7">27</option>
 <option value="8">28</option>
 <option value="9">29</option>
 <option value="10">30</option>
  <option value="10">31</option>
 </select>
 <select id="fechaNacimientoMes">
 <option value="">      mes</option>
 <option value="1">Enero</option>
 <option value="2">Febrero</option>
 <option value="3">Marzo</option>
 <option value="4">Abril</option>
 <option value="5">Mayo</option>
 <option value="6">Junio</option>
 <option value="7">Julio</option>
 <option value="8">Agosto</option>
 <option value="9">Septiembre</option>
 <option value="10">Octubre</option>
 <option value="11">Noviembre</option>
 <option value="12">Diciembre</option>
 </select> 

  <label>a&ntildeo:</label>
 <input type="text" id="" value="" size="8" maxlength="9"/><br/>

 </div>
 
 <div id="divDatosPersonales2">
 <label>Telefono movil:</label><br/>
 <input type="text" id="movil" value="" size="8" maxlength="9"/><br/>
 
 <label>Email:</label><br/>
 <input type="text" id="email1" value="" size="25" /><br/>
 
 <label>Repita el email:</label><br/>
 <input type="text" id="email2" value="" size="25" /> 
 </div>
 </div>
 
 
 <div id="divDomicilio">
 <label>Tipo de via:</label>
 <select id="tipoDeVia">
 <option value="Avenida">Avenida</option>
 <option value="Calle"selected="selected">Calle</option>
 <option value="Camino">Camino</option>
 <option value="Carretera">Carretera</option>
 <option value="Pasaje">Pasaje</option>
 <option value="Plaza">Plaza</option>
 <option value="Residencia">Residencia</option>
 <option value="Ronda">Ronda</option>
 <option value="Travesia">Travesia</option>
 <option value="Urbanizacion">Urbanizacion</option>
 </select>     
 
 
 
 <div id="divDatosPersonales2">
 <label>Localidad:</label>
 <input type="text" id="localidad" value="" size="13"/>  
 
 <label>Codigo Postal:</label>
 <input type="text" id="codigoPostal" value="" size="5" maxlength="5"/>  
 
 <label>ciudad:</label>
 <input type="text" id="codigoPostal" value="" size="5" maxlength="5"/>  
 </div> 
 </div> 
 
 
 <!--Datos de pago-->
 <div id="divPago" class="divsNo">
 <p><b>Introduzca los datos de la tarjeta de credito/debito donde se cargara el cobro:</b></p>
 
 
 <label>Titular de la tarjeta:</label><br/>
 <input type="text" id="titular" value="" size="26" /><br/>
 
 
 <div id="metodosDePago">
 <label><span  id="alertTipoDeTarjeta">Tipo de tarjeta:</span></label><br/>
 <label for="visa">

 <input type="radio" id="visa" name="tarjetas" class="logoTarjetas" value="Visa">
<img src="img/visa.jpg" style="width:100px; right: 30px;"></img>
 </label>
   
 <label for="masterCard">
 <input type="radio" id="masterCard" name="tarjetas" class="logoTarjetas" value="MasterCard">
 <img src="img/mastercard.png" style="width:100px; right: 30px;"></img>
 </label>
   
 <label for="amex">
 <input type="radio" id="amex" name="tarjetas" class="logoTarjetas" value="American Express">
 <img src="img/falabella.jpg" style="width:100px; right: 30px;"></img>
 </label>
   
 <label for="aurora">
 <input type="radio" id="aurora" name="tarjetas" class="logoTarjetas" value="Aurora">
 <img src="img/cencosud.jpg" style="width:100px; right: 30px;"></img>
 </label>
 
 </div>
 
 
 <div id="divNumeroTarjeta">
 <label>N&uacutemero tarjeta y CVC:</label><br/>
 <input type="text" id="numeroTarjeta" value="" size="15" maxlength="16" />
 <input type="text" id="cvcTarjeta" value="" size="2" maxlength="3" /><br/>
 
 

<br>
 </div>
 </div> 
 </div>

 </div> 
 </div>
<button><a href="WebUsuario.php">Comprar</button>
 <button ><a href="WebUsuario.php">Volver</button></a>
 <br>
 <br>

                             
         </form>
  <font size="8"></font>
  </section>
 </left>
 </body>
