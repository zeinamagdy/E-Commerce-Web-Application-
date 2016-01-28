<?php
  session_start();
  $error='';
  if(isset($_POST['submit']))
  {
  	if(empty($_POST['username']) || empty($_POST['password']))
  	{
  		$error="Username or Password is invalid";
  	}
  	else
  	{
  		echo"<pre>";echo print_r($_POST);echo "</pre>";
  		$username=$_POST['username'];
  		$password=$_POST['password'];
  		$conn=mysqli_connect("localhost","root","iti","project");
  		$query=mysqli_query($conn,"select uid from users where username='$username' and password='$password'");
  		$result=mysqli_fetch_assoc($query);
  		$row=mysqli_num_rows($query);
  		echo $row;
  		  if($row==1)
  		{
  			$_SESSION['log_user']=$username;
  			$_SESSION['uid']=$result['uid'];

  			header("location:myAccount.php");
  		}
  		else
  		{
  			$error="Username or Password is invalid";
  		}
  		mysqli_close($conn);

  	}
  }
?>