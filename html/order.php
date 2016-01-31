<?php
class Order{
	var $desc;
	var $id;
	var $user_id;
	var $total_price;
	var $num_items;
	var $pid;

	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = mysqli_connect('localhost','root','iti','babyshop');
		}

		if($id!=-1) {
			$query = "select * from orders where id=$id limit 1";
			$result = mysqli_query(self::$conn,$query);
			$order = mysqli_fetch_assoc($result);
			$this->id = $order['id'];
			$this->desc = $order['desc'];
			$this->user_id = $order['uid'];
			$this->total_price= $order['total_price'];
			$this->num_items=$order['num_items'];
			$this->pid=$order['pid'];


		}
	}


	function insert() {
		$query = "insert into orders(order_des,user_id,total_price ,num_items,pid) values('$this->desc','$this->user_id','$this->total_price','$this->num_items','$this->pid')";
		// adding order sub quantity product
		$result = mysqli_query(self::$conn, $query);
		return mysqli_insert_id(self::$conn);
	}
	function deleteUserOrders($uid) {
		$query = "delete  from orders where  user_id ='$uid'";
		mysqli_query(self::$conn,$query);
	}
	function deleteByPid($pid) {
		$query = "delete from orders where pid='$pid'";
		echo $query;
		mysqli_query(self::$conn,$query);
	}
	#------------------------------------------------------------------------------------

	/*function update() {
		$query = "update users set name='$this->name', email='$this->email' where id='$this->id'";
		mysqli_query(self::$conn,$query);
	}*/
	function updateQuantity($oid,$q)
	{
		$query = "update orders set num_items='$q' where oid='$oid'";
		mysqli_query(self::$conn,$query);
	}
	function updateOrderPrice($p)
	{
		$query = "update orders set total_price='$p' where oid='$oid'";
		mysqli_query(self::$conn,$query);
	}


	function if_exist($id) {
		$query = "select id from orders where id='$id'";
		$result = mysqli_query(self::$conn,$query);
		return (mysqli_num_rows($result)>0)?True:False ;
	}

	function orders() {
		$query = "select * from orders";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function OrderQuantity($oid){
		
		$query = "select num_items from orders where oid='$oid'";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function userOrder($id=-1){
		if($id==-1) {
			$id = $this->id;
		}
		$query = " select * from orders as orders join products as products on orders.pid = products.pId where orders.user_id=$id";
		$result = mysqli_query(self::$conn,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)) {
			$data []= $row;
		}
		return $data;
	}
	function OrdersPrice($id=-1){
		if($id==-1) {
			$id = $this->id;
		}
		$query = " select sum(total_price) as sum from orders where orders.user_id=$id";
		echo $query;
		$result = mysqli_query(self::$conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row;

	}
}



?>