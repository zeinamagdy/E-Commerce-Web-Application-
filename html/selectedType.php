<!--select by sub type directly from product table-->
<?php	
include 'head.php';
include 'products.php'; 
$product=new Product;
$p=[];
if(isset($_GET['type']))
{
	$p=$product->productByType($_GET['type']);
}/* get from search box but q is a string not id */		
elseif(isset($_GET['q']))
{
	$id=$product->productByName($_GET['q']);
	$p=$product->productByType($id);
}

echo "<div id='items'>";
/*echo "<table>";*/
foreach ($p as $key => $product) 
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
	echo "</div>";
	include'footer.php';
?>