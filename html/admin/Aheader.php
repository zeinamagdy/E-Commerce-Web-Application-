<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Baby Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>
	<div>
		<a href="#"><img src="../images/logo.gif" width="237" height="123" class="float" alt="setalpm" /></a>	                                                                                                                                                                                                                                                                                                            																																																																
      <div class="topnav">
			<span><strong>Welcome <?php session_start(); echo $_SESSION['log_user'];?></strong> &nbsp; &nbsp;
			 </span> 
	<!--		<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
				<option value="">Type of Product</option>
				<option value="selectedType.php?type=1">Clothing</option>
				<option value="selectedType.php?type=2">Toyes</option>
				<option value="selectedType.php?type=3">Food</option>
				<option value="selectedType.php?type=4">shoes</option>
			</select> -->

<!--<span>Language:</span> <a href="#"><img src="images/flag1.jpg" alt="" width="21" height="13" /></a> <a href="#"><img src="images/flag2.jpg" alt="" width="21" height="13" /></a> <a href="#"><img src="images/flag3.jpg" alt="" width="21" height="13" /></a>-->
			<span>	
				 <div id="tfheader">
      				<form id="tfnewsearch" method="get" action="selectedType.php">
              			<input type="text" class="tftextinput" name="q" size="21" maxlength="120">
              			<input type="submit" value="search" class="tfbutton">
      				</form>
   				<div class="tfclear"></div>
   				</div>
			</span>
		</div>
		<ul id="menu">
			<li><a href="#"><img src="../images/but1.gif" alt="" width="110" height="32" /></a></li>
			<li><a href="login.php"><img src="../images/but2.gif" alt="" width="110" height="32" /></a></li>
			<li><a href="registration.php"><img src="../images/but3.gif" alt="" width="110" height="32" /></a></li>
			<li><a href="myAccount.php"><img src="../images/but4.gif" alt="" width="110" height="32" /></a></li>
			<li><a href="shoppingCart.php"><img src="../images/but5.gif" alt="" width="110" height="32" /></a></li>
			<li><a href="#"><img src="../images/but6.gif" alt="" width="110" height="32" /></a></li>
		</ul>
	</div>
	<div id="content">
		<div id="sidebar">
			<div id="navigation">
				<ul>
					<li><a href="home.php">Home page</a></li>
					<li><a href="addcategory.php">category control</a></li>
					<li><a href="addSubcategory.php">sub category control</a></li>
					<li><a href="addProduct.php">product control</a></li>
				<!--	<li><a href="editcategory.php">Edit category</a></li>
					<li><a href="editSubcategory.php">Edit sub category</a></li>
					<li><a href="editProduct.php">Edit product</a></li>
					<li><a href="removecategory.php">Remove category</a></li>
					<li><a href="removeSubcategory.php">Remove sub category</a></li>
					<li><a href="removeProduct.php">Remove product</a></li>-->
					
					<li><a href="#">New products</a></li>
					<li><a href="AllProduct.php">All products</a></li>
					<li><a href="reviewcustomers.php">Review customers</a></li>
					<li><a href="#">F.A.Q.</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
				<!-- <div id="cart">
					<strong>Shopping cart:</strong> <br /> 0 items
				</div> -->
			</div>
			<div>
				<img src="../images/title1.gif" alt="" width="233" height="41" /><br />
				<ul class="categories">
					<li><a href="#">Action Toys &amp; Figures</a></li>
					<li><a href="#">Arts &amp; Crafts</a></li>
					<li><a href="#">Discovery &amp; Learning</a></li>
					<li><a href="#">Dolls &amp; Soft Toys</a></li>
					<li><a href="#">Games &amp; Puzzles</a></li>
					<li><a href="#">Collectibles</a></li>
					<li><a href="#">Infant &amp; Preschool</a></li>
					<li><a href="#">Novelty &amp; Virtual</a></li>
					<li><a href="#">Outdoors</a></li>
					<li><a href="#">TV &amp; Films</a></li>
				</ul>
				<img src="../images/title2.gif" alt="" width="233" height="41" /><br />																																																																																																																																																															
				<div class="review">
					<a href="#"><img src="../images/pic1.jpg" alt="" width="181" height="161" /></a><br />
					<a href="#">Product 07</a><br />
					<p>Dolor sit amet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor. invidunt ut labore et dolore magna </p>
					<img src="../images/stars.jpg" alt="" width="118" height="20" class="stars" />
				</div>
			</div>
		</div>
		<div id="main">