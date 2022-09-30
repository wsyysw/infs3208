<!doctype html>
<?php include ('floralFunction.php')?>

<html>
	<head>

	  <title>Shiyun</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
	  <meta name="description" content="Shiyun Flower">
	  <meta name="keywords" content="HTML,CSS,XML,JavaScript,jquery">
	  <meta name="author" content="Pegah">
	  <meta http-equiv="refresh" content="360">
	  <link rel="stylesheet" type="text/css" href="css/floral1.css" />
	  
	</head>

	<body>
		<!-- headerlogo -->
		<div id='logo'>
		<img src="ch_llaca_1.jpg" alt="llaca" width='255' height='110' /></div>
		<!-- header -->
	  
	  <div><h2>Shiyun Floral</h2> 
	  </div>
	  
	  <span id="phone_information">
	  <img src="telep.jpg" alt="phone_information" width='29' height='29' />
	  To place an order through phone, please call: <b>0123 456 987<b>
	  
	  </span>
	  
	<!-- main menue -->
	 <div>
		  <ul id="tab_pages">
				<li><a href="index1.php">Home</a></li>

				<li><a href="#">Contact</a></li>

				<li><a href="#">Help</a></li>

				<li><a href="#">About us</a></li>

				<li><a href="loginFloral1.php">Login</a></li>
				
	            <li>
				    <form method="get" action="result_floral.php" enctype="multipart/form-data">
						 <input type="text" name="user_query"/>
						 <input type="submit" name="search" value="search"/>
				<li>
				    </form>
			</ul>	
		</div>
	  
		<div id='product_box1'>
		
		<?php
		$server="mysql.metropolia.fi";
        $login="pegahk";
        $pass="3392796255";
        $database="pegahk";
		
		$con=mysqli_connect($server,$login,$pass,$database);
		if(mysqli_connect_errno()){
		echo "Failed connect to MYSQL".mysqli_connect_error();
		}

        //this is going to take a product from items table base on the category
         if(isset($_GET['ID'])){
     
         $pro_id=$_GET['ID'];
		 $get_pro="SELECT * from items WHERE ID='$pro_id'";
		 
		 $run_pro=mysqli_query($con,$get_pro);
		 while($row_pro= mysqli_fetch_array($run_pro)){
		 
		 
		 $pro_image=$row_pro["image"];
		 $pro_Name= $row_pro["Name"];
		 $pro_Price=$row_pro["Price"];
		 $pro_Size=$row_pro["Size"];
		 $pro_Desc=$row_pro["Description"];
		 
		 echo"
		  <div id='single_pro1'>
		  <img src='pic/$pro_image' width='300' height='300'/>
		  <h3>$pro_Name</h3>
		  <h3> $pro_Desc</h3>
		  <h3>$ $pro_Price</h3>
		  <a href='index1.php'>Add to Cart</a>
		  <a href='index1.php'>Go Back</a>
		  </div>
		 
		 ";
		 
		 }
		 }
	?>	 
	     </div>

		<!-- make a side bar -->
				<div id="floralSidebar">
					<div id="floralSidebarTitle">All Categories</div>
					
					<ul id="cats">
					   <?php 
					   
					   getcat();
					   ?> 
					   </ul>	
					  <div id="floralSidebarTitle_1">Price</div>
					  <ul id="cats">
					  <?php 
					   getprice();
					   ?> 
					</ul>	
				</div>
				
				<!-- Make a table for buying -->
				<div id="buying_table">
				<h2>Buy this item</h2>
				<p>Please fill the table below:</p>
				<form name="info" action="delivery.php" 
				    onsubmit="return validation()" method="post">
				
				<table>
				<tbody>
					<td width="200" height="80" >Name:</td>
					<td width="466"><input name="Name" type="text" id="Name" title="Name" maxlength="200"></td>
					<td id="msg1"></td>
				  </tr>
				   <tr>
					<td width="200" height="80" >LastName:</td>
					<td width="466"><input name="LastName" type="text" id="Name" title="Name" maxlength="200"></td>
					<td id="msg2"></td>
				  </tr>
				  <tr>
					<td width="200" height="50" >Email:</td>
					<td width="466"><input name="Email" type="text" id="Name" title="Name" maxlength="200"></td>
					<td id="msg3"></td>
				  </tr>
				  <tr>
					<td width="200" height="80">Address:</td>
					<td><textarea name="Address" cols="15" rows="5" id="textarea"></textarea></td>
					<td id="msg4"></td>
				  </tr>
				  <tr>
					<td width="200" height="80" >PhoneNumber:</td>
					<td width="466"><input name="Phone" type="text" id="Name" title="Name" maxlength="200"></td>
					<td id="msg5"></td>
				  </tr>
				  <tr>
					<td >&nbsp;</td>
					<td ><input type="submit" name="submit" id="button" value="Buy It"  ></td>
				  </tr>
				  </tbody>
				  </table>
				  </form>
				  </div>
				  
				
		<!-- make a Footer -->
		<div id='page_footer'>
		Copyright©
		</div>
		<script type="text/javascript" src="js/delivery.js"></script>
	</body>
</html>
	
