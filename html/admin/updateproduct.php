<?php
include '../products.php';
	$product=new product;

if(isset($_POST['save']))
{
	//if(!empty(trim($_POST['scatname']))){
		if(isset($_FILES['image']))
		{
		$product_id=$_POST['product_id'];
		echo $product_id;
		$subType_id=$_POST['scatname'];
		$pname=$_POST['pname'];
		$desc=$_POST['desc'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		$pdate=$_POST['pdate'];
		print_r($_FILES['image']);
		$product_img=$_FILES['image']['tmp_name'];
		$imgname=$_FILES['image']['name'];
		//echo $imgname;
		move_uploaded_file($product_img,"../images/items/$imgname");
		/*$product->$name=$pname;
	 	$product->$id=$product_id;
		$product->$descr=$desc;
		$product->$quantity=$quantity;
		$product->$image=$imgname;
		$product->$price=$price;
		$product->$pdate=$pdate;*/
		//$product->update($product_id);
		$product->update($product_id,$pname,$desc,$quantity,$imgname,$subType_id,$price,$pdate);
		header("location:addProduct.php");
}
/*	}
	else{
		header("location:addProduct.php");
	}*/
}

?>
