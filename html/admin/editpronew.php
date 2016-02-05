<?php
include '../products.php';
$id=$_GET['id'];
$myproduct=new product($id);
$name=$myproduct->name;
$price=$myproduct->price;
$quantity=$myproduct->quantity;
$image=$myproduct->image;
$desc=$myproduct->descr;
print_r($_GET);

echo $_GET['id'];

include 'Aheader.php';
?>
<div class="container">

	<div class="row">
      
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
               <td class="col-md-3"><a href="updatep1.php?id= <?php echo $id; ?>&action=updatep&name=<?php echo $name; ?>" name="edit">Edit</a></td>
             </tr>
              <tr>
               <th>image</th>
               <td class="col-md-3"><img src="../<?php echo $image; ?>" width="100" height="100" /></td>

               <td class="col-md-3"><a href="updatep1.php?id= <?php echo $id; ?>&action=updatei&name=<?php echo $name; ?>">Edit</a></td>
             
             </tr> 
             
           </tbody>
           </table>

      </div>
  </div>
</div>
<?php
include 'Afooter.php';
?>