<?php

class subcategory
{
	var $id;
	var $name;
private static $conn = Null;	
function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','babyshop');
		}

		if($id!=-1) {
			$query = "select * from subType where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$cat= mysqli_fetch_assoc($result);
			$this->id = $cat['id'];
			$this->name = $cat['name'];
		}
	}

	function getcategory($id) {
		$query = "select * from subType where id=$id limit 1";
		$result = mysqli_query(self::$conn,$query);
		$cat = mysqli_fetch_assoc($result);
		$this->id = $cat['id'];
		$this->name = $cat['name'];
	}		
		function subcategory() {
		// select product where aviable and quantity>0
		$query = "select * from subType";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

	function insert($scatname,$Type_id) {
	$query="INSERT INTO subType(name, tid) VALUES ('$scatname','$Type_id')";
		$result  = mysqli_query(self::$conn,$query);
		//return mysqli_insert_id(self::$conn);
	}


	function update($id) {
		$query = "update subType set name='$this->name' where id=$id";
		mysqli_query(self::$conn,$query);
	}

	function delete($id) {
		$query = "delete from subType where id=$id";
		mysqli_query(self::$conn,$query);
	}
}
?>