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
  		echo"<pre>";print_r($_POST);echo "</pre>";
  		$username=$_POST['username'];
  		$password=$_POST['password'];
  		$conn=mysqli_connect("localhost","root","iti","babyshop");
  		$query=mysqli_query($conn,"select * from users where username='$username' and password='$password'");
  		$result=mysqli_fetch_assoc($query);
  		$row=mysqli_num_rows($query);
  		echo $row;
      print_r($result);
  		  if($row==1)
  		{
        if($result['isAdmin']==1)
        {
            $_SESSION['log_user']=$username;
        $_SESSION['uid']=$result['uid'];
          header("location:admin/home.php");
        }else{
            $_SESSION['log_user']=$username;
        $_SESSION['uid']=$result['uid'];
         header("location:index.php");
        }
  		

  			
  		}
  		else
  		{
  			$error="Username or Password is invalid";
  		}
  		mysqli_close($conn);

  	}
  }
?>