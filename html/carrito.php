<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "web_de_ventas");
if(isset($_POST["add_to_cart"]))
{
if(isset($_SESSION["shopping_cart"]))
{
$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["shopping_cart"]);
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_producto"],
'item_price' => $_POST["hidden_precio"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][$count] = $item_array;
}
else
{
echo '<script>alert("El producto ya se encuentra agregado")</script>';
 
}
}
else
{
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_producto"],
'item_price' => $_POST["hidden_precio"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
if($values["item_id"] == $_GET["id"])
{
unset($_SESSION["shopping_cart"][$keys]);
echo '<script>alert("Producto eliminado")</script>';
echo '<script>window.location="carrito.php"</script>';
}
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>carro</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="width:800px;">
<h3 align="center">Comprar</h3>
<?php
$query = "SELECT * FROM productos ORDER BY id_producto ASC";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
<center>
<div class="col-md-4">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=add&id=<?php echo $row["id_producto"]; ?>">
<div class="thumbnail">
<img width="100px" height="100px;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenes']); ?>"/> </td>
<div class="caption">
<h4 class="text-info text-center"><?php echo $row["producto"]; ?></h4>
<h4 class="text-danger text-center">$ <?php echo $row["precio"]; ?></h4>
<input type="text" name="quantity" class="form-control" value="1" />
<p class='text-center'>
<input type="submit" name="add_to_cart" class="btn btn-success " value="Agregar al carro" /></p>
 
<input type="hidden" name="hidden_producto" value="<?php echo $row["producto"]; ?>" />
<input type="hidden" name="hidden_precio" value="<?php echo $row["precio"]; ?>" />
</div>
</div>
</form>
</div>
</center>
<?php
}
}
?>
<div style="clear:both"></div>
<h3>Detalle de la orden</h3>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th width="40%">Descripción</th>
<th width="10%" class='text-center'>Cantidad</th>
<th width="20%" class='text-right'>Precio</th>
<th width="15%" class='text-right'>Total</th>
<th width="5%"></th>
</tr>
<?php
if(!empty($_SESSION["shopping_cart"]))
{
$total = 0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
?>
<tr>
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

<?php

}
?></table>
 <input type="submit" onclick="location.href = 'carrito2.php'" name="Submit" value="Comprar"/>


</div>
</div>
</body>
</html> 