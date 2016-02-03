<?php
		include 'head.php';
		include 'products.php';
		$product = new Product();
		$newProducts=$product->Newproduct();
		//
?>

				
		<div id="main">
			<img src="images/photo.jpg" alt="" width="682" height="334" border="0" usemap="#Map" />
            <br />
			<div id="inside">
				<img src="images/title3.gif" alt="" width="159" height="15" /><br />
				<div class="info">
					<img src="images/pic2.jpg" alt="" width="159" height="132" />
					<p>Dolor sit amet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor. invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadip- scing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur. </p>
					<a href="#" class="more"><img src="images/more.gif" alt="" width="106" height="28" /></a>					
				</div>
				<img src="images/title4.gif" alt="" width="159" height="17" /><br />
				<div id="items">
				<?php
				foreach ($newProducts as $key => $product) { ?>
					<div class="item">
					<a href="test.php?id=<?php echo $product['pId']; ?>"><img src=<?php echo $product['image']; ?> width="213" height="192" /></a><br />
					<p><a href="itemDetails.php?id=<?php echo $product['pId']; ?>"><?php  echo $product['name'];  ?></a></p><span class="price">$<?php echo $product['price']; ?></span><br />
					</div>
					<?php } ?>

				
				</div>
			</div>
		</div>
	</div>

<?php
//}
	include'footer.php';
	
?>