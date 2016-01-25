<?php	
	include 'head.php';
	include 'products.php';
	// select product by id
	$product=new Product($_GET['id']);
	//user id will send in session 
?>
<!--- display user info and update it-->
<div class="item">
	<img src=<?php echo $product->image?> width="213" height="192" /></a><br />
			<p><?php  echo $product->name;  ?></a></p><span class="price">$<?php echo $product->price; ?></span><br/>
</div>
<div>
	<p> <?php echo "<h3>".$product->name."</h3></br>descrption:".$product->descr."</br>price:".$product->price."$</br>avaible quantity:".$product->quantity?></p><br/>
</div>
<form action="shoppingCart.php?id=<?php echo $product['pId'];?>" method="post">
				<table>
					<tr>
						<td><input type="text" id="num" name="num"class='button' ></td>
						<td><input type="submit" id="add" name="add" class='button' value="Add to cart"></td>
					</tr>
				<!--<a href='shoppingCart.php' class='button'>Add to cart</a>-->
				</table>
</form>
		


			
	
<?php
	include'footer.php';
?>
