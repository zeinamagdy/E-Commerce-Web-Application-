<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>    
    <link rel="stylesheet" href="css/normalize.css">    
    <link rel="stylesheet" href="css/cartStyle.css">
    
  </head>
<?php
	session_start();
	include 'head.php';
	include 'products.php';
	include'user.php';
	include 'order.php';
	$order = new Order();
	if(isset($_GET['id']))
	{
		$product=new Product($_GET['id']);		
		// if(isset($_session['uid']))
		// {
			// $order->$user_id=$_session['uid'];
			$order->user_id = 1;
			$order->num_items = $order->num_items + 1;
			$order->desc= $product->descr;
			$order->insert();	
			// $Q=$product->quantity - $_session['quentity'];
			$Q=$product->quantity - 1;
			$product->updateQ($Q);
		// }
	}	
	//$demand=$order->userOrder($_session['uid']);
	$demand=$order->userOrder(1);
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
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">25.98</div>
  </div>
<?php
 }
 ?>
  <div class="totals">
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
  </div>
      
      <button class="checkout">Checkout</button>

</div>
			
<?php
	include'footer.php';
?>