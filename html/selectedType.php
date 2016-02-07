<!--select by sub type directly from product table-->
<?php	
include 'head.php';
include 'products.php'; 
$product=new Product;
$price=[];
$type=[];
//drop box
if(isset($_GET['type']))
{	
	$type=$product->productByType($_GET['type']);
}
if (isset($_GET['price'])) 
{
	$price=$product->productByPrice($_GET['price']); 
	
}
echo "<div id='items'>";
echo count($price);
if(count($price)>0)
{
	
	foreach ($price as $key => $product) 
	{
?>
	<!--main div-->
	<!--- display item details to add it to user cart-->
	<div class="item">
		<a href="itemDetails.php?id=<?php echo $product['pId']; ?>"><img src=<?php echo $product['image']; ?> width="213" height="192" /></a><br />
		<p><a href="itemDetails.php?id=<?php echo $product['pId']; ?>"><?php  echo $product['name'];  ?></a></p><span class="price">$<?php echo $product['price']; ?></span><br />
	</div>

<?php
	}
}

if(count($type)>0)
{
	foreach ($type as $key => $product) 
	{
	?>
		<div class="item">
		<a href="itemDetails.php?id=<?php echo $product['pId']; ?>"><img src=<?php echo $product['image']; ?> width="213" height="192" /></a><br />
		<p><a href="itemDetails.php?id=<?php echo $product['pId']; ?>"><?php  echo $product['name'];  ?></a></p><span class="price">$<?php echo $product['price']; ?></span><br />
	</div>
	<?php
	}
}
	echo "</div>";
	include'footer.php';
?>