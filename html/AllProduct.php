<?php
	
	include 'head.php';
	include 'products.php';
	$product=new Product;
	$p=$product->product();
	$per_page=9;
	if (isset($_GET["page"])) {

	$page = $_GET["page"];

	}

	else {

	$page=1;

	}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;
	echo "<div id='items'>";
	foreach ($p as $key => $product) {
?>
	<!--main div-->
	<!--- display all products-->
	<div class="item">
			<a href="test.php?id=<?php echo $product['pId']; ?>"><img src=<?php echo $product['image']; ?> width="213" height="192" /></a><br />
			<p><a href="itemDetails.php?id=<?php echo $product['pId']; ?>"><?php  echo $product['name'];  ?></a></p><span class="price">$<?php echo $product['price']; ?></span><br />
		</div>
<?php
}
echo "</div>";
$total_records = count($p);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / 9);


//Going to first page
echo "<center><a href='AllProduct.php?page=1'>".'First Page'."</a> ";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a href=AllProduct.php?page=".$i.">".$i."</a>";
};
// Going to last page
echo "<a href=’pagination.php?page=$total_pages'>".'Last Page'."</a></center>";


	include'footer.php';
?>