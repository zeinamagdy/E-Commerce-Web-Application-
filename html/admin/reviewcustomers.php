<?php
include 'Aheader.php';
include '../user.php';
?>

<div id="inside">
<!--<div id="items">-->
<h3>review customers</h3>
  <table class="table table-bordered table-hover table-striped table-responsive">

	<caption></caption>
	<thead>
		<tr >
			<th>name</th>
			<th>username</th>
			<th>birth date</th>
			<th>job</th>
			<th>email</th>
			<th>credit</th>
			<th>address</th>
			<th>interests</th>
			
		</tr>
	</thead>
	<tbody>
		<tr>

		
<?php
	$cust=new user;
	$c=$cust->users();

	foreach ($c as $key => $user) {
		//$pimg=$user['image'];
?>

	<!--	<div class="item">
			<a href="../itemDetails.php?id=<?php// echo $product['pid']; ?>"><img src="../products_img/<?php echo $pimg; ?>" width="213" height="192" /></a>
			<a href="../itemDetails.php?id=<?php //echo $product['pid']; ?>" ><?php  echo $product['name'];  ?></a><span class="price">$<?php echo $product['price']; ?></span>
			<a href="editProduct.php?id=<?php //echo $product['pid']; ?>&name=<?php echo $product['name']; ?>">edit</a>
			<a href="removeProduct.php?id=<?php //echo $product['pid']; ?>">delete</a>
		

		</div>  -->
			<td><?php echo $user['name'] ?></td>&nbsp; &nbsp;&nbsp; &nbsp;
			<td><?php echo $user['username'] ?></td>&nbsp; &nbsp;&nbsp; &nbsp;
			<td><?php echo $user['birthdate'] ?></td>&nbsp; &nbsp;&nbsp; &nbsp;
			<td><?php echo $user['job'] ?></td>&nbsp; &nbsp;&nbsp; &nbsp;
			<td><?php echo $user['email'] ?></td>&nbsp; &nbsp; &nbsp; &nbsp;
			<td><?php echo $user['credit'] ?></td>&nbsp; &nbsp; &nbsp; &nbsp;
			<td><?php echo $user['address'] ?></td>&nbsp; &nbsp; &nbsp; &nbsp;
			<td><?php echo $user['interests'] ?></td>&nbsp; &nbsp; &nbsp; &nbsp;
	</tr>
<?php
}
echo "</tbody></table></div>";
include 'Afooter.php';
?>