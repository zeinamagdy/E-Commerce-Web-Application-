<?php
include 'categoryclass.php';
$id=$_GET['id'];
echo $id;
	//$subcateg=new subcategory;

/*if(isset($_POST['save']))
{
	$scat_id=$_POST['scat_id'];
	$scateg->name=$_POST['scatname'];
	$categ->update($scat_id);
}*/

include 'Aheader.php';
?>
<form action="updatescat.php" method="post">	
<input type='hidden' name='scat_id' value='<?php echo $id; ?>'/>

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
			<td><input type="text" name="scatname"/></td>
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