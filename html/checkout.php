<head>
	<link rel="stylesheet" type="text/css" href="css/s.css" />
	<style type="text/css">
	.table{
		width:80%;
		height:80%;
	}
	</style>

</head>
<?php
	//session_start();
	include 'head.php';
	include 'user.php';
	if(isset($_SESSION['uid'])){	
		$user= new User($_SESSION['uid']);
		$order=new order();
		$x=$user->credite - $_SESSION['sum'];
		$demand=$order->userOrder($_SESSION['uid']);

	
	}
?>
<!--- main div-->
<div class="col-md-9 personal-info">

        <h3>Orders</h3>
        
        
        <table class="table table-bordered table-hover table-striped table-responsive">
          <tbody>
          <tr>
          	<th>orders </th>
          	<th>Quantity</th>
          	<th>Price</th>
          </tr>
          <?php
          	foreach ($demand as $key =>$orders) { 

            echo '<tr><td class="col-md-3">'.$orders['name'].'</td><td class="col-md-3">'.$orders['num_items'] .
			'</td>><td class="col-md-3">'.$orders['price'].'</td></tr>';	             
             }
             echo '<tr><th  class="col-md-3"colspan ="2"> Total price</th><td class="col-md-3">'.$_SESSION['sum'].'</td></tr>';
             $order->deleteUserOrders($_SESSION['uid']);
             $user->updateCredite($x,$_SESSION['uid']);
            ?> 
             
           </tbody>
           </table>
           <br><br>
         <div class="container">
  			<h2>Thanks</h2>
  			<div class="panel panel-default">
    			<div class="panel-body"><?php echo $user->name."  your credit:  ".$x?></div>
 			</div>
		</div>
         <!-- <div class="form-group">
            <label class="col-md-3 control-label"></label>
           
          </div>-->
          
        
      </div>
 <!-- </div>
</div>-->




		
			
	
<?php
	include'footer.php';
?>
