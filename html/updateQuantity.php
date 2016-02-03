<?php
session_start();
include 'products.php';
include 'order.php';
include 'user.php';
$order = new Order();
$product= new product();
print_r($_SESSION['uid']);

/*if(isset($_SESSION['uid'])&& isset($_GET['oid']))
{
	$user= new User($_SESSION['uid']);
	$totalPrice=$orderQ[0][' total_price '];   
    $reminder=$user->credite -$p;
      if($reminder>=0)
*/


if(isset($_GET['oid']))
{
	
	$orderQ=$order->OrderQuantity($_GET['oid']);
	print_r($orderQ);
	echo "<br>";
	print_r($orderQ[0]);
	echo "<br>";
	echo $orderQ[0]['num_items'];
	echo "<br>";
	$diff=$_GET['q'] - $orderQ[0]['num_items'];
    $product->updateOrderQ($diff,$_GET['oid']);
    $order->updateQuantity($_GET['oid'],$_GET['q']);
    $price= $product->getPrice($_GET['oid']);
    print_r($price);  
   	echo "diff"."<br>";
   	echo $diff;
    $p=$diff * $price[0]['price'];    
    echo $p;
    $order->updateOrderPrice($p,$_GET['oid']);
}
//}


?>
