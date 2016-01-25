<?php
class User{
	var $name;
	var $id;
	var $password;
	var $email;
	var $credite;

	#--------Edite
	var $isAdmine;
	#var $isBlocked;

	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','blog');
		}

		if($id!=-1) {
			$query = "select * from users where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$user = mysqli_fetch_assoc($result);
			$this->id = $user['id'];
			$this->name = $user['name'];
			$this->password = $user['password'];
			$this->email = $user['email'];
			$this->isAdmine=$user['isAdmine'];
			#$this->isBlocked=$user['isblocked'];
		}
	}

	function getUser($name,$password) {
		$query = "select * from users where name='$name' and password='$password' limit 1";
		$result = mysqli_query(self::$conn,$query);
		$user = mysqli_fetch_assoc($result);
		$this->id = $user['id'];
		$this->name = $user['name'];
		$this->password = $user['password'];
		$this->email = $user['email'];
		$this->isAdmine=$user['isAdmine'];
		#$this->isBlocked=$user['isblocked'];
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
	}
	#-----------------------------------------------------
	function checkBeforeLogin($name,$password) {
		$query = "select id from users where name='$name' and password='$password'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
	}

	function insert() {
		$query = "insert into users(name,password,email) values('$this->name','$this->password','$this->email')";
		$result  = mysqli_query(self::$conn,$query);
		return mysqli_insert_id(self::$conn);
	}

	function update() {
		$query = "update users set name='$this->name', email='$this->email' where id='$this->id'";
		mysqli_query(self::$conn,$query);
	}
	#---------------------Edite to update block user
	function updateBlockUser($isblocked ,$id) {
		if($isblocked==1)
		{
			$B=0;
		}
		else
		{
			$B=1;
		}
		$query = "update users set isblocked='$B' where id='$id'";
		mysqli_query(self::$conn,$query);
		echo"user is block";
	}
	function addForbiddenWord($word){
		$query ="insert into forbidden (word) values('$word')";
		mysqli_query(self::$conn,$query);
		echo "'$word' has added to forbidden words";

	}
	#--------------------------------------------------------------------
	function updateWithId($id) {
		$query = "update users set name='$this->name', email='$this->email' where id='$id'";
		mysqli_query(self::$conn,$query);
	}

	function if_exist($name) {
		$query = "select id from users where name='$name'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
	}

	function users() {
		$query = "select * from users";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
}

	


?>