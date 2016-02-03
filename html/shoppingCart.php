<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>    
    <link rel="stylesheet" href="css/normalize.css">    
    <link rel="stylesheet" href="css/cartStyle.css">
   
 </head>
<?php
	include 'head.php';
	include 'products.php';
	include'user.php';	
	if(isset($_SESSION['uid']))
    {
    if(isset($_GET['id']))
  	{	
      $user=new user($_SESSION['uid']);
      $totalPrice=$order->OrdersPrice($_SESSION['uid']);
      
      $product = new Product($_GET['id']);
      $order = new Order();
      $reminder=$user->credite - ($totalPrice['sum'] + $product->price) ;
      if($reminder>=0)
      {	
      	$order->user_id=$_SESSION['uid'];
      	$order->num_items = $order->num_items + 1;
      	$order->desc= $product->descr;
        $order->total_price=$product->price; 
      	$order->pid=$_GET['id'];
      	$order->insert();	
      	// $Q=$product->quantity - $_session['quentity'];
      	$Q=$product->quantity - 1;
      	$product->updateQ($Q);
        $totalPrice=$order->OrdersPrice($_SESSION['uid']);
        $_SESSION['sum']=$totalPrice['sum'];
      } 
      else
      {
        //make pop up window to show that user don`t have enough credite
        echo "<script>alert('sorry,You don\'t have enough credit.')</script>";
      } 		
  	}
  	$demand=$order->userOrder($_SESSION['uid']);
    updateCart(count($demand));
  }

?>
	
		<!--main div-->
		<!--- display user cart info and update it-->

    <h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Details</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
<?php

	foreach ($demand as $key => $order) {
?>
  <div class="product">
    <div class="product-image">
      <img src=<?php echo $order['image'];?>>
    </div>
    <div class="product-details">
      <div class="product-title"><?php echo $order['name']?></div>
      <p class="product-description"><?php echo $order['descr']?></p>
    </div>
    <div class="product-price"><?php echo $order['price']?></div>
    <div class="product-quantity">
      <input type="number" value="1" min="1" data-oid='<?php echo $order['oid']?>'>
    </div>
    <div class="product-removal">
      <button class="remove-product" data-id='<?php echo $order['pid']?>' id="del">
        Remove
      </button>
    </div>
    <div class="product-line-price" data='<?php echo $order['price']?>'><?php echo $order['price']?></div>
  </div>
<?php
 }
 ?>
  <!-- <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>     -->  
      <button class="checkout" <?php if(isset($_GET['id']) && $reminder<0) echo "disabled"; ?> >Checkout</button>
</div>

<script src='js/jquery.min.js'></script>
<script src="js/jquery.query-2.1.7.js"></script>
<script src="js/index.js"></script>     
<?php
	include'footer.php';
?>