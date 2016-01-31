<?php
include 'categoryclass.php';
    if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
                // get the 'id' variable from the URL
            $id=$_GET['id'];
			$categ=new category;
			$categ->delete($id);
			header("location:addcategory.php");
		}	
//header("location:addcategory.php");
?>