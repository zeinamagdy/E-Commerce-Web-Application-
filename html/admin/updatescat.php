<?php
include 'subcategoryclass.php';
	$categ=new subcategory;

if(isset($_POST['save']))
{
	if(!empty(trim($_POST['scatname']))){
		$scat_id=$_POST['scat_id'];
		$categ->name=$_POST['scatname'];
		$categ->update($scat_id);
		header("location:addSubcategory.php");
	}
	else{
		header("location:addSubcategory.php");
	}
}

?>