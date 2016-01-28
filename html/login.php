<?php
  include('singin.php');
  if(isset($_SSESION['uid']))
  {
  	header("location:myAccount.php");
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    
	<!-- General meta information -->
	<title>Login Form </title>
	
	<style type="text/css" >
	    body{
	    	background-color:#F0F0F0 ;

	    }
	   #main {
          width:960px;
          margin:50px auto;
          font-family:raleway
         
             }
		span {
		color:red
		     }
		h3 {
		/*background-color:#FEFFED;*/
		text-align:center;
		border-radius:10px 10px 0 0;
		margin:-10px -40px;
		padding:15px
		   }
		hr {
		border:0;
		border-bottom:1px solid #ccc;
		margin:10px -40px;
		margin-bottom:30px
		   }
		#login {
			
		padding: 70px 0 0 0px;
	    height: 400px;
		width:300px;
		float:right;
		border-radius:10px;
		font-family:raleway;
		border:2px solid #ccc;
		padding:10px 40px 25px;
		margin-top:70px
		      }
		#label{
			margin: -top:20px; 
		}
		input[type=text],input[type=password] {
		width:99.5%;
		padding:15px;
		margin-top:10px;
		margin-bottom:10px;
		border:1px solid #ccc;
		padding-left:5px;
		font-size:16px;
		font-family:raleway
		     }
		input[type=submit] {
		width:100%;
		background-color:#FFBC00;
		color:#fff;
		border:2px solid #FFCB00;
		padding:10px;
		font-size:20px;
		cursor:pointer;
		border-radius:5px;
		margin-top:15px;
		margin-bottom:15px
                           }
        
		
	</style>
	

	
</head>
<body>

	<div id="main">
      
       <div id="login">
          <h3>Sign in to your account</h3>
          <form action="" method="post">
            <div id="label" >        
              <label>UserName :</label>
             </div>
              <input id="name" name="username" placeholder="username" type="text" >
               
              <div id="label">
              <label>Password :</label>
              </div>
             
              <input id="password" name="password" placeholder="**********" type="password">
              
              
              <input name="submit" type="submit" value=" Login ">
             
             <span><?php echo $error; ?></span>
          </form>
       </div>
    </div>
</body>
</html>