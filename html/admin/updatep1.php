<?php
include '../products.php';
$id=$_GET['id'];
print_r($_GET);
$name=$_GET['name'];
$action=$_GET['action'];
echo $action;


include 'Aheader.php';
?>
<form action="editp1.php" method="post" enctype="multipart/form-data">	
<input type='hidden' name='product_id' value='<?php echo $id; ?>'/>
<input type="hidden" name="action" value="<?php echo $action; ?>">
	<div id="inside">
	<table  width="500px" align="center">
		<tr><th colspan="3"><h2>edit product <?php echo $name; ?> </h2></th></tr>
		<!-- <tr>
			<th>subcategory name</th>
			<td><select name="scatname">
			<?php 
			/*include 'subcategoryclass.php';
			$scat=new subcategory;
			$c=$scat->subcategory();
			foreach ($c as $key => $value) {
				$scat_id=$value['id'];
				$name=$value['name'];
			echo "<option value='$scat_id'>$name</option> ";
		}*/
				?>
			</select></td>
		</tr> -->
		<?php
		if($action=="updaten"){
			echo "aykalam";
		echo "<tr>
			<th>product name</th>
			<td><input type='text' name='pname'/></td>
		</tr>";
		}
		else if($action=="updatep"){

		echo "<tr>
			<th>price</th>
			<td><input type='text' name='price'/></td>
		</tr> ";
	}
	else if($action=='updateq'){
		echo "<tr>
			<th>quantity</th>
			<td><input type='text' name='quantity'/></td>
		</tr>";
	}
	else if($action=='updated'){
		echo "<tr>
			<th>description</th>
			<td><input type='text' name='desc'/></td>
		</tr>";
	}
	else if($action=='updatei'){
		echo "<tr>
			<th>image</th>
			<td><input type='file' name='image'/></td>
		</tr>";
	}

		?>
		<!-- <tr>
			<th>date</th>
			<td><input type="text" name="pdate"/></td>
		</tr> -->
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="save" value="save" ></td>
		</tr>
	</table>
</div>	
</form>
<?php
include 'Afooter.php';
?>
