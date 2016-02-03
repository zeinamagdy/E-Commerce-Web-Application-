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
	</style>
</head>
<?php
	//session_start();
	include 'head.php';
	include 'products.php';
	
	// select product by id
	$product=new Product($_GET['id']);
?>
<!---main div-->
<!--- display item details to add it to user cart-->

	<div id="items">
		<div class="item"id="photo">
			<img src='<?php echo $product->image ?>' width="213" height="192" /><br />
			<p><?php  echo $product->name;  ?></p><span class="price">$<?php echo $product->price; ?></span><br />
		</div>
		<div class="item" id="i">
			<p> <?php echo "<h3>".$product->name."</h3></br>
				Descrption: ".$product->descr."</br>
				Price: ".$product->price."$</br>
				Quantity: ".$product->quantity?></p>
			<br />
			<br />
			<br />
			<a href='shoppingCart.php?id=<?=$product->id?>' class='button'>Add to cart</a>
		</div>

	</div>
<?php
//$_session['uid']=1;// change accourding current user
$session['quentity']=1; //will change if user define quantity

	include'footer.php';
?>