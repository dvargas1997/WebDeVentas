<?php
session_start();

 
 echo "<table border = 1 >
            <tr> <td>";

$total = 0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
?>

<tr>
  <tr>
<th width="40%">Descripción</th>
<th width="10%" class='text-center'>Cantidad</th>
<th width="20%" class='text-right'>Precio</th>
<th width="15%" class='text-right'>Total</th>
<th width="5%"></th>
</tr>
 
<td><?php echo $values["item_name"]; ?></td>
<td class='text-center'><?php echo $values["item_quantity"]; ?></td>
<td class='text-right'>$ <?php echo $values["item_price"]; ?></td>
<td class='text-right'>$ <?php echo number_format((int)$values["item_quantity"] * $values["item_price"]); ?></td>
<td><a href="carrito.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Eliminar</span></a></td>
</tr>
<?php
$total = $total + ($values["item_quantity"] * $values["item_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">$ <?php echo number_format($total); ?></td>
<td></td>
</tr>




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
 
 

 </div>
 </div> 
 </div>

 </div> 
 </div>
<button><a href="WebUsuario.php">Comprar</button>
 <button ><a href="WebUsuario.php">Volver</button></a>
 

                             
         </form>
  <font size="8"></font>
  </section>
 
 </body>