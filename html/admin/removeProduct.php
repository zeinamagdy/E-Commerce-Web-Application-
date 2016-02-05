<?php
include '../products.php';
    if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
                // get the 'id' variable from the URL
            $product_id=$_GET['id'];
            //echo $product_id;
			$product=new product;
			$product->delete($product_id);
			header("location:AllProduct.php");
		}
		else{
			header("location:AllProduct.php");
		}	

?>
