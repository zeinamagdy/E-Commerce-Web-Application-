<?php
include '../products.php';
$action=$_POST['action'];
$id=$_POST['product_id'];
echo $id;
$prod=new product;

if(isset($_POST['save']))
{
if($action=='updaten'){
	$name=$_POST['pname'];
	$prod->updatename($id,$name);
	header("location:addProduct.php");
}
else if($action=='updatep'){
	$p=$_POST['price'];
	$prod->updateprice($id,$p);
	header("location:addProduct.php");
}
else if($action=='updateq'){
	$q=$_POST['quantity'];
	$prod->updatequantity($id,$q);
	header("location:addProduct.php");
}
else if($action=='updatei'){
		$product_img=$_FILES['image']['tmp_name'];
		$imgname=$_FILES['image']['name'];
		//echo $imgname;
		move_uploaded_file($product_img,"../images/items/$imgname");

	$prod->updateimage($id,$imgname);
	header("location:addProduct.php");
}
else if($action=='updated'){
	$d=$_POST['desc'];
	$prod->updatedesc($id,$d);
	header("location:addProduct.php");
}
}
?>