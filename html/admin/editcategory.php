<?php
include 'categoryclass.php';
$id=$_GET['id'];
//echo $id;
	$categ=new category;
	//$name=$categ->getcategory($id);
	//print_r($name) ;
/*if(isset($_POST['save']))
{
	$cat_id=$_POST['cat_id'];
	$categ->name=$_POST['catname'];
	$categ->update($cat_id);
}*/

include 'Aheader.php';
?>
<form action="updatecat.php" method="post">	
<input type='hidden' name='cat_id' value='<?php echo $id; ?>'/>

	<table  width="500px" align="center">
<!-- 		<tr>
			<th>category name</th>

			<td><select name="category_name" >
				 		<?php
				/*$c=$categ->category();
				foreach ($c as $key => $value) {
				$name=$value['name'];*/
			?> 
				<option value=""><?php //echo $name; ?></option>
			
			</select></td>
		</tr> -->
			
		<tr>
			<th>new name</th>
			<td><input type="text" name="catname"/></td>
		</tr>
		<tr>
			<td></td>
			<td id="submit"><input type="submit" name="save" value="Add" ></td>
		</tr>
	</table>
</div>	
</form>
<?php

include 'Afooter.php';
?>