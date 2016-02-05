<?php
	session_start();
	//print_r($_SESSION);
	include 'head.php';	
	if(isset($_SESSION)){
	$id=$_SESSION['uid'];
	$conn=mysqli_connect("localhost","root","iti","babyshop");
	$query=mysqli_query($conn,"select * from users where uid='$id'");
	$result=mysqli_fetch_assoc($query);
	//print_r($result);
			    //echo $_SESSION['uid'];
	
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="css/s.css" rel='stylesheet' type='text/css' />	
	
</head>
<body>

		<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	
      </div>
      
      <!-- edit form column -->
      
        <h3>Personal info</h3>
        
        
        <table class="table table-bordered table-hover table-striped table-responsive">
          <tbody>
            <tr>
             <th>Name</th>
             <td class="col-md-3"><?php echo $result['name'];?></td>
             <td class="col-md-3"><a href="edit.php?x=name&y=uid">Edit</a></td>
             </tr>
             <tr>
               <th>UserName</th>
               <td class="col-md-3"><?php echo $result['username'];?></td>
               <td class="col-md-3"><a href="edit.php?x=username&y=uid">Edit</a></td>
             </tr>
             <tr>
               <th>Password</th>
               <td class="col-md-3"><?php echo $result['password'];?></td>
               <td class="col-md-3"><a href="edit.php?x=password&y=uid">Edit</a></td>
             </tr>
              <tr>
               <th>Email</th>
               <td class="col-md-3"><?php echo $result['email'];?></td>
               <td class="col-md-3"><a href="edit.php">Edit</a></td>
             </tr> 
             <tr>
               <th>Credit Limit</th>
               <td class="col-md-3"><?php echo $result['credit'];?></td>
               <td class="col-md-3"><a href="edit.php">Edit</a></td>
             </tr>
             <tr>
               <th>Birthdate</th>
               <td class="col-md-3"><?php echo $result['birthdate'];?></td>
               <td class="col-md-3"><a href="edit.php">Edit</a></td>
             </tr>
             <tr>
               <th>Address</th>
               <td class="col-md-3"><?php echo $result['address'];?></td>
               <td class="col-md-3"><a href="edit.php">Edit</a></td>
             </tr>
             <tr>
               <th>Interest</th>
               <td class="col-md-3"><?php echo $result['interests'];?></td>
               <td class="col-md-3"><a href="edit.php">Edit</a></td>
             </tr>
           </tbody>
           </table>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-success btn-md" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-info btn-md" value="Cancel">
            </div>
          </div>
          
        
      </div>
  </div>
</div>

</body>
</html>		
	
<?php
	include'footer.php';
?>
