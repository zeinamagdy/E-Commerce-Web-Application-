<?php
	include 'products.php';
	include 'order.php';
	include 'user.php';
	$order = new Order();
	$product=new Product();
	$user=new user(1);// will get from session
	$_GET['pid'];
	if($_GET['pid'])
	{
		$order->deleteByPid($_GET['pid']);
		$Q=$product->quantity+1; // as cart add quantity =1
		$product->updateQ($Q);
	}
?>