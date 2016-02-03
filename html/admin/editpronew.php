<?php
include '../products.php';
$id=$_GET['id'];
$myproduct=new product($id);
$name=$myproduct->name;
$price=$myproduct->price;
$quantity=$myproduct->quantity;
$image=$myproduct->image;
$desc=$myproduct->descr;
/*$p=$myproduct->product();
$name=$p['name'];
$price=$p['price'];
$quantity=$p['quantity'];
$img=$p['image'];*/
print_r($_GET);

echo $_GET['id'];
//$name=$_GET['name'];

/*$desc=$_GET['desc'];
$quantity=$_GET['quantity'];
$image=$_GET['image'];
$subType_id=$_GET['subType_id'];
$price=$_GET['price'];*/

include 'Aheader.php';
?>
<div class="container">
<!--     <h1>Edit product</h1>
   	<hr>-->
	<div class="row">
      <!-- left column -->
<!--       <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div> -->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <h3>Product info</h3>
        
        
        <table class="table table-bordered table-hover table-striped table-responsive">
          <tbody>
            <tr>
             <th>product name</th>
             <td class="col-md-3"><?php echo $name;?></td>
             <td class="col-md-3"><a href='updatep1.php?id= <?php echo $id; ?>&action=updaten&name=<?php echo $name; ?>'>Edit</a></td>
             </tr>
             <tr>
               <th>quantity</th>
               <td class="col-md-3"><?php echo $quantity;?></td>
               <td class="col-md-3"><a href='updatep1.php?id= <?php echo $id; ?>&action=updateq&name=<?php echo $name; ?>'>Edit</a></td>
             </tr>
             <tr>
               <th>price</th>
               <td class="col-md-3"><?php echo $price;?></td>
               <td class="col-md-3"><a href="updatep1.php?id= <?php echo $id; ?>&action=updatep&name=<?php echo $name; ?>">Edit</a></td>
             </tr>
              <tr>
               <th>image</th>
               <td class="col-md-3"><img src="../<?php echo $image; ?>" width="100" height="100" /></td>
             <!-- <td class="col-md-3"><input type="file" name="image" class="form-control"/></td>
-->
               <td class="col-md-3"><a href="updatep1.php?id= <?php echo $id; ?>&action=updatei&name=<?php echo $name; ?>">Edit</a></td>
             
             </tr> 
             
           </tbody>
           </table>
<!--           <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-success btn-md" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-info btn-md" value="Cancel">
            </div>
          </div> -->
          
        
      </div>
  </div>
</div>
<?php
include 'Afooter.php';
?>