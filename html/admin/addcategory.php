<?php
include 'categoryclass.php';
if(isset($_POST['Add']))
{
	if(!empty(trim($_POST['catname']))){
		$name=$_POST['catname'];
		$categ=new category;
		$categ->insert($name);
	}
}

include 'Aheader.php';
?>
<form action="addcategory.php" method="post">	
<div id="inside">
	<table  width="500px" align="center">
	<caption>Add new category</caption>

		<tr>
			<th>category name</th>
			<td><input type="text" name="catname"/></td>
		</tr>
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="Add" value="Add" ></td>
		</tr>
	</table>
</div>	
</form>
<?php
	
	$categ=new category;
	$c=$categ->category();

	echo "<table id='items'>";
	foreach ($c as $key => $value) {
		$name=$value['name'];
?>
	<tr class="item">
			<td><?php echo $name; ?></td>
			<td><a href="editcategory.php?id=<?php echo $value['tid']; ?>">edit</a></td>
			<td><a href="removecategory.php?id=<?php echo $value['tid']; ?>">delete</a></td>
	</tr>

<?php
}
echo "</table>";
	
include 'Afooter.php';
?>
</table>