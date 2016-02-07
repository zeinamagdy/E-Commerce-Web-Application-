
<?php
	include 'Aheader.php';
	include 'subcategoryclass.php';
	$subcateg=new subcategory;
	$c=$subcateg->subcategory();
	?>
	<div id="inside">
    <table class="table table-bordered table-hover table-striped table-responsive">
<?php

	foreach ($c as $key => $value) {
		$name=$value['name'];
?>
	
	<tr >
			<td><?php echo $name; ?></td>
			<td><a href="editSubcategory.php?id=<?php echo $value['id']; ?>">edit</a></td>
			<td><a href="removeSubcategory.php?id=<?php echo $value['id']; ?>">delete</a></td>
	</tr>

<?php
}
echo "</table></div>";
include 'Afooter.php';
?>
