<?php
include 'products.php';
include 'order.php';
$order = new Order();
$product= new product();
if(isset($_GET['oid']))
{
	$orderQ=$order->OrderQuantity;
	print_r($orderQ);
	$diff=$_GET['q'] -$orderQ['num_items'];
	$Q=$product->quantity - $diff;
    $product->updateQ($Q);
    $p=$diff * $product->price;
    echo $p;
    $order->updateOrderPrice($p);
}


?>
