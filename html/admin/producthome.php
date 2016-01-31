<?php
include 'Aheader.php';
?>
<form enctype="multipart/form-data" action="addProduct.php" method="post">	
<div id="inside">
	<table  width="500px" align="center">
		<tr>
			<th>subcategory name</th>
			<td><select name="scatname">
			<?php 
			include 'subcategoryclass.php';
			$scat=new subcategory;
			$c=$scat->subcategory();
			foreach ($c as $key => $value) {
				$scat_id=$value['id'];
				$name=$value['name'];
			echo "<option value='$scat_id'>$name</option> ";
		}
				?>
			</select></td>
		</tr>
		<tr>
			<th>product name</th>
			<td><input type="text" name="pname"/></td>
		</tr>
		<tr>
			<th>description</th>
			<td><input type="text" name="desc"/></td>
		</tr>
		<tr>
			<th>quantity</th>
			<td><input type="text" name="quantity"/></td>
		</tr>
		<tr>
			<th>price</th>
			<td><input type="text" name="price"/></td>
		</tr>
		<tr>
			<th>image</th>
			<td><input type="file" name="image"/></td>
		</tr>
		<tr>
			<th>date</th>
			<td><input type="text" name="pdate"/></td>
		</tr>
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="submit" value="Add" ></td>
		</tr>
	</table>
</div>	
</form>
	<div id="items">

<?php

	foreach ($p as $key => $product) {
		$pimg=$product['image'];
?>

		<div class="item">
			<a href="../itemDetails.php?id=<?php echo $product['pid']; ?>"><img src="../products_img/<?php echo $pimg; ?>" width="213" height="192" /></a>
			<a href="../itemDetails.php?id=<?php echo $product['pid']; ?>" ><?php  echo $product['name'];  ?></a><span class="price">$<?php echo $product['price']; ?></span>
			<a href="editproduct.php?id=<?php echo $product['pid']; ?>">edit</a>
			<a href="removeProduct.php?id=<?php echo $product['pid']; ?>">delete</a>

		</div>
		 
		
	
<?php	
}

include 'Afooter.php';
?>
</div>