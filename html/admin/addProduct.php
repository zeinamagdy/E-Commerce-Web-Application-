<?php
include '../products.php';
include 'subcategoryclass.php';
$product=new product;

if(isset($_POST['addp']))
{
	if(!empty(trim($_POST['scatname']))&&!empty(trim($_POST['pname']))&&!empty(trim($_POST['desc']))&&!empty(trim($_POST['quantity']))&&!empty(trim($_POST['price']))&&!empty(trim($_POST['pdate']))&&!empty(trim($_FILES['image']['tmp_name']))){
		//$pid=$product->getproductId();
		//echo $pid;
		$subType_id=$_POST['scatname'];
		$pname=$_POST['pname'];
		$desc=$_POST['desc'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		//$date=date("d/m/y");
		$pdate=$_POST['pdate'];
		//$pdate=now();
		//$pdate=strtotime('$pd','%d-%m-%Y');
		$product_img=$_FILES['image']['tmp_name'];
		$imgname=$_FILES['image']['name'];
		$type=$_FILES['image']['type'];
		if(in_array($type, array('image/jpeg','image/png','image/jpg','image/gif'))){
		move_uploaded_file($product_img,"../images/items/$imgname");
		//move_uploaded_file($product_img,"../products_img/1.jpg");
		$product->insert($pname,$desc,$quantity,$imgname,$subType_id,$price,$pdate);
		}
		//header("location:addProduct.php");
	}
}

include 'Aheader.php';
?>

<form enctype="multipart/form-data" action="addProduct.php" method="post">	
<div id="inside">
	<table  width="500px" align="center">
		<tr><th colspan="3"><h2>Add new product</h2></th></tr>
		<tr>

			<th>subcategory name</th>
			<td><select name="scatname">
			<?php 
			
			$scat=new subcategory;
			$c=$scat->subcategory();
			foreach ($c as $key => $value) {
				$scat_id=$value['id'];
				$name=$value['name'];
			echo "<option value='$scat_id'>$name</option> ";
		}
				?>
			</select></td>
		</tr>
		<tr>
			<th>product name</th>
			<td><input type="text" name="pname"/></td>
		</tr>
		<tr>
			<th>description</th>
			<td><input type="text" name="desc"/></td>
		</tr>
		<tr>
			<th>quantity</th>
			<td><input type="text" name="quantity"/></td>
		</tr>
		<tr>
			<th>price</th>
			<td><input type="text" name="price"/></td>
		</tr>
		<tr>
			<th>image</th>
			<td><input type="file" name="image"/></td>
		</tr>
		<tr>
			<th>date</th>
			<td><input type="text" name="pdate"/></td>
		</tr>
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="addp" value="Add" ></td>
		</tr>
	</table>
	
</form>
	
	<div id="items">
	
	

<?php
	$dis=new product;
	$d=$dis->product();

	foreach ($d as $key => $product) {
		$pimg=$product['image'];
?>

		<div class="item">
			<a href="../itemDetails.php?id=<?php echo $product['pid']; ?>"><img src="../<?php echo $pimg; ?>" width="213" height="192" /></a>
			<a href="../itemDetails.php?id=<?php echo $product['pid']; ?>" ><?php  echo $product['name'];  ?></a><span class="price">$<?php echo $product['price']; ?></span>
			<a href="editp1.php?id=<?php echo $product['pId']; ?>&name=<?php echo $product['name']; ?>">edit</a>
			<a href="removeProduct.php?id=<?php echo $product['pId']; ?>">delete</a>

		</div>
		 
		
	
<?php	
}
echo "</div></div>";
include 'Afooter.php';
?>
