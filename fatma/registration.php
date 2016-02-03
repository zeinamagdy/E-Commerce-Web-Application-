<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<title>Login registration forms Flat Widget Template :: w3layouts</title>
		<meta charset="utf-8">
		<link href="css/loginstyleSpare.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->  
   <?php
      $name = $address = $email = $credit =$username=$password=$cpass="";
      if ($_SERVER["REQUEST_METHOD"] == "POST")  
        {  
		  $name = test_input($_POST["name"]);
		  $email = test_input($_POST["email"]);
		  $credit= test_input($_POST["credit"]);
		  $username = test_input($_POST["username"]);  
		  $password= test_input($_POST["pass"]); 
		  $cpass=test_input($_POST['cpass']);   	     
		  $address=test_input($_POST['address']);  
		   
	    } 
	    function test_input($data)  
        {  
		  $data = trim($data);  
		  $data = stripslashes($data);  
		  $data = htmlspecialchars($data);  
		  return $data;
		 }

  
      $nameerr=$emailerr=$crediterr=$usererr=$passerr=$cpasserr=$adderr="";
      $name1=$email1=$credit1=$user1=$pass1=$cpass1=$add1="";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {  
          $valid = true;
            if(empty($_POST["name"])) 
            {  
     			$nameerr = "Missing Name";  
    		    $valid =false;  
            }  
            else {  
			     $name1 = test_input($_POST["name"]);  
			           // check if name only contains letters and whitespace  
			     if (!preg_match("/^[a-zA-Z ]*$/",$name))  
			      {  
			   		 $nameerr = "Only letters and white space allowed";  
			    	 $valid=false;  
			       }  
			    } 
			   
			 if (empty($_POST["email"])) 
			        {  
				     $emailerr = "Missing email address";  
				     $valid=false;  
				    }  
            else 
                   {  
				     $email1 = test_input($_POST["email"]);  
				           // check if e-mail address syntax is valid  
				     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))  
				    {  
				       $emailerr = "Invalid email format";  
				       $valid=false;  
				     }  
                   }
           
             if (empty($_POST["username"])) 
             {  
			     $usererr = "specify your username";  
			     $valid=false;  
			  }  
            else 
            {  
               $user1 = test_input($_POST["username"]);  
            }  
            if (empty($_POST["pass"])) 
            {  
               $passerr = "specify your password";  
               $valid=false;  
             }  
           else
            {  
              $pass1 = test_input($_POST["pass"]);  
            } 
            if(empty($_POST['cpass']))
             {
             	$cpasserr="confirm your passwprd";
             	$valid=false;
             } 
             else
             {
             	if($_POST['cpass']!=$_POST['pass'])
             	{
             	   $cpasserr="password does not match";
             	   $valid=false;
                }
                else
                {
                	$cpass1=test_input($_POST["cpass"]);
                }
             }
             if (empty($_POST["address"]))
			       {  
				   $adderr = "Missing Address";  
				   $valid=false;  
				     }  
			 else 
				   {  
				     $add1 = test_input($_POST["address"]);  
				     // check if name only contains letters and whitespace  
				     if (!preg_match("/^[a-zA-Z ]*$/",$address))  
				      {  
				        $adderr = "Only letters and white space allowed";  
				        $valid=false;  
				       }  
				    }
    }
   
     if(@$valid==true)
     {
     	
     	$conn=mysqli_connect("localhost","root","iti","babyshop");
     	@$n=$_POST['name'];
     	@$user=$_POST['username'];
     	@$pa=$_POST['pass'];
     	@$cpa=$_POST['cpass'];
     	@$em=$_POST['email'];
     	@$cr=$_POST['credit'];
     	@$ad=$_POST['address'];
     	@$birthd=$_POST['birth'];
     	@$interest=$_POST['in'];
     	
            $query=mysqli_query($conn,"insert into users (name,username,password,birthdate,email,credit,address,interests) values('$n','$user','$pa','$birthd','$em','$cr','$ad','$interest')");
     	    echo $query;
     	    header("location:myAccount.php");
     	
     	
     	mysqli_close($conn); 
     
     }

   ?>		

</head>
<body>
     
     
	<div class="main">
		<div class="header" >
			<h1>Login or Create a Free Account!</h1>
		</div>
		
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			
				<ul class="left-form">
					<h2>New Account:</h2>
					
					<li>

						<input type="text" name="name" value="<?php echo htmlspecialchars($name);?>" placeholder="Name*" type="text"/>
						<span><font color="red"><?php echo "&nbsp&nbsp&nbsp".$nameerr;?></font></span>
						
						<div class="clear"> </div>
					</li> 
					
					<li>
						<input name="email" type="text" value="<?php echo htmlspecialchars($email);?>" placeholder="Email address*" />
						<span><font color="red"><?php echo "&nbsp&nbsp&nbsp".$emailerr;?></font></span>
						<div class="clear"> </div>
					</li> 
					
					<li>
					    <input type="text" name="credit" placeholder="Credit limit*"/>
					    <div class="clear">
					    	
					    </div>
					</li>
					<li>
						<input type="text" name="username" value="<?php echo htmlspecialchars($username);?>" placeholder="User name*"/>
						<span><font color="red"><?php echo "&nbsp&nbsp&nbsp".$usererr;?></font></span>
						<div class="clear">
							
						</div>
					</li>
					<li>
						<input type="password" name="pass"  value="<?php echo htmlspecialchars($password);?>" placeholder="Password*"/>
						<span><font color="red"><?php echo "&nbsp&nbsp&nbsp".$passerr;?></font></span>
						<div class="clear">
							
						</div>
					</li>
					<li>
						<input type="password" name="cpass"  value="<?php echo htmlspecialchars($cpass);?>" placeholder="Confirm password*"/>
						<span><font color="red"><?php echo "&nbsp&nbsp&nbsp".$cpasserr;?></font></span>
						<div class="clear"></div>
					</li>
					<li>
						<input type="text"   name="address" value="<?php echo htmlspecialchars($address);?>" type="text"placeholder="address*" />
						<span><font color="red"><?php echo "&nbsp&nbsp&nbsp".$adderr;?></font></span>
						<div class="clear"> </div>
					</li> 
					<li>
						<input name="birth" type="date"  id="datepicker" placeholder="Birthdate" />
						<div class="clear"> </div>
					</li>
					<li>
						<input type="text" name="in" placeholder="Your interests">
						<div class="clear"></div>
					</li>
					    
					
					<input type="submit" name="submit" onclick="myFunction()" value="Create Account">
						<div class="clear"> </div>
				</ul>
				
				<div class="clear"> </div>
					
			</form>
			
		</div>
			<!--start-copyright-->
   					<div class="copy-right">						
<p> &copy; 2014 Login_registration. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>

					</div>
				<!--//end-copyright-->


</body>
</html>