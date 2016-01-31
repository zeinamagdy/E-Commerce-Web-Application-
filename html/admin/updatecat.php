<?php
include 'categoryclass.php';
	$categ=new category;

if(isset($_POST['save']))
{
	if(!empty(trim($_POST['catname']))){
		$cat_id=$_POST['cat_id'];
		$categ->name=$_POST['catname'];
		$categ->update($cat_id);
		header("location:addcategory.php");
	}
	else{
		header("location:addcategory.php");
	}
}

?>