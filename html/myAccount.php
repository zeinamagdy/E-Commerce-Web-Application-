<?php
	session_start();
	print_r($_SESSION);
	include 'head.php';	
	if(isset($_SESSION)){
	$id=$_SESSION['uid'];
	$conn=mysqli_connect("localhost","root","iti","babyshop");
	$query=mysqli_query($conn,"select * from users where uid='$id'");
	$result=mysqli_fetch_assoc($query);
	print_r($result);
	
} 

?>

		<!-- display user info and update it-->
		
			
	
<?php
	include'footer.php';
?>
