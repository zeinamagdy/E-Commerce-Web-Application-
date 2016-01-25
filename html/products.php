<?php
class Product{
	var $name;
	var $id;
	var $descr;
	var $quantity;
	var $image;
	var $price;


	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','project');
		}

		if($id!=-1) {
			$query = "select * from products where pId=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$product= mysqli_fetch_assoc($result);
			$this->id = $product['pId'];
			$this->name = $product['name'];
			$this->descr = $product['descr'];
			$this->quantity=$product['quantity'];
			$this->image=$product['image'];
			$this->price=$product['price'];
		}
	}

	/*function getUser($name,$password) {
		$query = "select * from users where name='$name' and password='$password' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$user = mysqli_fetch_assoc($result);
		$this->id = $user['id'];
		$this->name = $user['name'];
		$this->password = $user['password'];
		$this->email = $user['email'];
		$this->isAdmine=$user['isAdmine'];
		$this->isBlocked=$user['isblocked'];
	}
	#-------------------------------------------------------------------
	public function getUserId($id){
		$query = "select * from users where id=$id limit 1";
		$result = mysqli_query(self::$conn,$query);
		$user = mysqli_fetch_assoc($result);
		$this->id = $user['id'];
		$this->name = $user['name'];
		$this->password = $user['password'];
		$this->email = $user['email'];
		$this->isAdmine=$user['isAdmine'];
		$this->isBlocked=$user['isblocked'];	
	}*/
	#----------------------------------------------------

	function insert() {
		$query = "insert into products(name,descr,quantity,image,price) values('$this->name','$this->descr','$this->quantity','$this->image','$this->price')";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
	}

	function update() {
		$query = "update products set name='$this->name', descr='$this->descr', quantity='$this->quantity', image='$this->image' where pId='$this->id'";
		mysqli_query(self::$conn,$query);
	}
	#--------------------------------------------
	function updateQ($Q) {
		$query = "update products set quantity='$Q' where pId='$this->id'";
		mysqli_query(self::$conn,$query);
	}
	#--------------------------------
	
	

	function if_exist($name) {
		$query = "select pId from products where name='$name'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
	}

	function product() {
		// select product where aviable and quantity>0
		$query = "select * from products where quantity>0";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function productByType($type) {
		// select product where aviable and quantity>0 and id 
		$query = "select * from products where quantity > 0 and type_id ='$type'";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function productByName($name) 
	{
		// select product where aviable and quantity>0 and id 
		$query = "select id from types where type='$name'";
		$result = mysqli_query(self::$conn,$query);
		$value = mysqli_fetch_assoc($result);
		return $value['id'];
	}
	

		


	/*function posts($id=-1){
		if($id==-1) {
			$id = $this->id;
		}
		$query = "select post.id, post.content from users as user join posts as post on post.user_id = user.id where user.id=$id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];

		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}

	function comments($id=-1){
		if($id==-1) {
			$id = $this->id;
		}
		$query = "select comment.id, comment.content,comment.post_id from users as user join comments as comment on comment.user_id = user.id join posts as post on post.id=comment.post_id where user.id=$id";
		$result = mysqli_query(self::$conn,$query);
		$data= [];

		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}*/

}


?>