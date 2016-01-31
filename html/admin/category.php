<?php
include '../db.php';

class category 
{
	var $cat_id;
	var $cat_name;
	function __construct(argument)
	{
		# code...
	}

/*	function search($field,$value){
		$query="select * from category where $field like '%$value%'";
		$result=mysqli_query($conn,$query);
			$cat_id=mysqli_fetch_assoc($result);
			$Type_id=$cat['tid'];
	}*/

	function displayAll(){
		$getcat="SELECT * FROM types order by tid limit 9";
	}
}

?>