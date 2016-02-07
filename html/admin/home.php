<?php
include 'Aheader.php';
include '../products.php';
//include 'body2.php';

?>
<div id="inside">
<div id="items">

<?php
	$dis=new product;
	$d=$dis->product();

	foreach ($d as $key => $product) {
		$pimg=$product['image'];
?>

		<div class="item">
			<a href="../itemDetails.php?id=<?php echo $product['pId']; ?>"><img src="../<?php echo $pimg; ?>" width="213" height="192" /></a>
			<a href="../itemDetails.php?id=<?php echo $product['pId']; ?>" ><?php  echo $product['name'];  ?></a><span class="price">$<?php echo $product['price']; ?></span>
			<a href="editpronew.php?id=<?php echo $product['pId']; ?>&name=<?php echo $product['name']; ?>">edit</a>
			<a href="removeProduct.php?id=<?php echo $product['pId']; ?>">delete</a>

		</div>
		 
	



<?php
}
echo "</div></div>";
include 'Afooter.php';
?>