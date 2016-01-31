<?php
include 'categoryclass.php';
include 'subcategoryclass.php';
$cat=new category;
$c=$cat->category();

if(isset($_POST['Add']))
{
	if(!empty(trim($_POST['subcatname']))){
		$subcat=new subcategory;
		$Type_id=$_POST['catname'];
		$scatname=$_POST['subcatname'];
		$subcat->insert($scatname,$Type_id);
	}
}

include 'Aheader.php';
?>
<form action="addSubcategory.php" method="post">	
<div id="inside">
	<table  width="500px" align="center">
		<tr>
			<th>category name</th>

			<td><select name="catname">
			<?php 
			foreach ($c as $key => $value) {
				$cat_id=$value['tid'];
				$name=$value['name'];
			echo "<option value='$cat_id'>$name</option> ";
		}
				?>
			</select></td>
		</tr>
		<tr>
			<th>subcategory name</th>
			<td><input type="text" name="subcatname"/></td>
		</tr>
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="Add" value="Add" ></td>
		</tr>
	</table>
</div>	
</form>

<?php
	
	$subcateg=new subcategory;
	$c=$subcateg->subcategory();

	echo "<table id='items'>";
	foreach ($c as $key => $value) {
		$name=$value['name'];
?>
	<tr class="item">
			<td><?php echo $name; ?></td>
			<td><a href="editSubcategory.php?id=<?php echo $value['id']; ?>">edit</a></td>
			<td><a href="removeSubcategory.php?id=<?php echo $value['id']; ?>">delete</a></td>
	</tr>
	</br>

<?php
}
echo "</table>";
include 'Afooter.php';
?>

