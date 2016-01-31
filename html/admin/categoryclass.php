<?php

class category
{
	var $id;
	var $name;
private static $conn = Null;	
function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','babyshop');
		}

		if($id!=-1) {
			$query = "select * from types where tid=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$cat= mysqli_fetch_assoc($result);
			$this->id = $cat['tid'];
			$this->name = $cat['name'];
		}
	}

	function getcategory($id) {
		$query = "select * from types where tid=$id limit 1";
		$result = mysqli_query(self::$conn,$query);
		$cat = mysqli_fetch_assoc($result);
		$this->id = $cat['id'];
		$this->name = $cat['name'];
	}		
		function category() {
		// select product where aviable and quantity>0
		$query = "select * from types";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

	function insert($name) {
	$query="INSERT INTO types(name) VALUES ('$name')";
		$result  = mysqli_query(self::$conn,$query);
		//return mysqli_insert_id(self::$conn);
	}


	function update($id) {
		$query = "update types set name='$this->name' where tid=$id";
		mysqli_query(self::$conn,$query);
	}

	function delete($id) {
		$query = "delete from types where tid=$id";
		mysqli_query(self::$conn,$query);
	}
}
?>