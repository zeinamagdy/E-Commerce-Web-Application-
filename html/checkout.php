<?php
	session_start();
	include 'head.php';
	include 'user.php';
	print_r($_SESSION);
	echo $_SESSION['sum'];
	//if(isset($_session[uid])){	
		$user= new User(1);
		$order=new order();
		$x=$user->credite - $_SESSION['sum'];
		$user->updateCredite($x,1);
		$order->deleteUserOrders(1);
		echo $user->credite;
	//}	
	


?>
<!--- main div-->
		
			
	
<?php
	include'footer.php';
?>
