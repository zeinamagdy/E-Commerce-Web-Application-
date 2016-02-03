<?php
$action=$_GET['action'];
$id=$_GET['id'];
$prod=new product;

if($action=='updaten'){
	$name=$_POST['name'];
	$prod->updatename($id,$name);
}
else if($action=='updatep'){
	$p=$_POST['price'];
	$prod->updateprice($id,$p);
}
else if($action=='updateq'){
	$q=$_POST['quantity'];
	$prod->updatequantity($id,$q);
}
else if($action=='updatei'){
	$i=$_POST['image'];
	$prod->updatequantity($id,$i);
}
?>