<?php
include 'subcategoryclass.php';
    if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
                // get the 'id' variable from the URL
            $id=$_GET['id'];
			$scateg=new subcategory;
			$scateg->delete($id);
			header("location:addSubcategory.php");
		}
		else{
			header("location:addSubcategory.php");
		}	

?>
