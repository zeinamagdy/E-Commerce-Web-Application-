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
	$order = new Order();
  $user=new user(1);// it will get from session 
	if(isset($_GET['id']))
	{
		$product=new Product($_GET['id']);
      $orderPrice=$user->credite - $product->price;
      if($orderPrice>=0)	
      {	
        echo $orderPrice;
        $user->updateCredite($orderPrice,1);// will get fromsession
  			// $order->$user_id=$_session['uid'];
  			$order->user_id = 1;
  			$order->num_items = $order->num_items + 1;
  			$order->desc= $product->descr;
        $order->total_price=$product->price; 
  			$order->pid=$_GET['id'];
  			$order->insert();	
  			// $Q=$product->quantity - $_session['quentity'];
  			$Q=$product->quantity - 1;
  			$product->updateQ($Q);
  		}
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
      <button class="remove-product" data-id='<?php echo $order['pid']?>' id="del">
        Remove
      </button>
    </div>
    <div class="product-line-price" data='<?php echo $order['price']?>'>25.98</div>
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

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='js/jquery.query-2.1.7.js'></script>
<script src="js/index.js"></script>
			
<?php
	include'footer.php';
?>