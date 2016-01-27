<head>
	<style type="text/css">
	#i{
		width:213px;
		height:192px;
		padding:20px;
		height: 990px
		width: 420px;
    	border: white;
	}
	#photo
	{
		position:absolute;
		margin-left:450px;
		/*width:213px;
		height:192px;*/
	}
	#num
	{
		background-color:white;
	}



	</style>
</head>
<?php
	session_start();	
	include 'head.php';
	include 'products.php';
	// select product by id
	$product=new Product($_GET['id']);
	//user id will send in session 
?>
<!---main div-->
<!--- display item details to add it to user cart-->
	<div id="items">
		
		<div class="item" id="photo">
			<img src=<?php echo $product->image?> width="213" height="192" /></a><br />
			<p><?php  echo $product->name;  ?></a></p><span class="price">$<?php echo $product->price; ?></span><br />
		</div>
		<div class="item" id="i">
			<p> <?php echo "<h3>".$product->name."</h3></br>descrption:".$product->descr."</br>price:".$product->price."$</br>avaible quantity:".$product->quantity?></p>
			
			<br/>
		</div>
		<div>
			<form action="shoppingCart.php?id=<?php echo $product->'pId';?>" method="post">
				<table>
					<tr>
						<td><input type="text" id="num" name="num"></td>
						<td><input type="submit" id="add" name="add" class='button' value="Add to cart"></td>
					</tr>
				<!--<a href='shoppingCart.php' class='button'>Add to cart</a>-->
				</table>
			</form>
		</div>	
		
	
</div>
		
		
	



<?php
	$_session['p_id']=$product->id;
	include'footer.php';
?>