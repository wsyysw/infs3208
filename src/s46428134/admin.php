<!doctype html>
<?php include ('floralFunction.php')?>
<?php include ('flowerMain.php')  ?>

<html>
	<head>

	  <title>Shiyun</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
	  <meta content="utf-8" http-equiv="encoding" />
	  <link rel="stylesheet" type="text/css" href="css/floral1.css" />
	  <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	  <script>tinymce.init({selector:'textarea'});</script>
	  
	</head>

	<body>
	<!-- headerlogo -->
	<div id='logo'>
	<img src="ch_llaca_1.jpg" width='255' height='110' /></div>
	<!-- header -->
	  
	  <div><h2>Shiyun Floral</h2> 
	  </div>
	  
	  <span id="phone_information">
	  <p><img src="telep.jpg" align="middle" width='29' height='29' />
	  To place an order through phone, please call: <b>0123 456 987<b>
	 </p>
	  </span>
	  
	  
	
	  
	  
     <!-- main menue -->
		  <ul id="tab_pages">
				<li><a href="index.php">Home</a></li>

				<li><a href="order_flower.php">Orders</a></li>

				<li><a href="#">Help</a></li>

				<li><a href="order_flower.php">Orders</a></li>

					

				<li><a href="loginFloral1.php">Login</a></li>
				
	            <li>
				    <form method="get" action="result_floral.php" enctype="multipart/form-data" >
						 <input type="text" name="user_query"/>
						 <input type="submit" name="search" value="search"/>
				<li>
				    </form>
	  
			</ul>	
		<div align="center">
		<form name="formname" action="newFlowerItem.php" method="post">
			<table  id='admin_floral_table'>
				<tbody>
				<tr>
					<td >flower category</td>
					<td ><select name="cate" >
					
					<option value="1">Happy Birthday</option>
					<option value="2"/>Wedding Setup</option>
					<option value="3"/>Other Occasion</option>
					<option value="4">I'm Sorry Flower</option>
					<option value="5">Congraduation!</option>
					<option value="6">Appreciation</option>
					<option value="7">Sympathy</option>
					<option value="8">Shiyun Floral's Best Sells</option>
					</select>
					</td>
					
				  </tr>
				  <tr>
					<td width="117" height="49" align="left">Name</td>
					<td width="466"><input name="Name" type="text" id="Name" title="Name" maxlength="200" ></td>
					
				  </tr>
				  <tr>
					<td height="289">Description</td>
					<td><textarea name="Desc" cols="35" rows="17" id="textarea"></textarea></td>
				  </tr>
				  <tr>
					<td>Size</td>
					<td><input type="text" name="Size" id="size_textfield"></td>
				  </tr>
				  <tr>
					<td>Price</td>
					<td>
					  <input type="text" name="Price" id="textfield_2">$</td>
				  </tr>
				  <tr>
					<td >Price_category</td>
					<td ><select name="P_cate" >
					<option value="1">$45-$55</option>
					<option value="2"/>$55-$65</option>
					<option value="3"/>$65-$85</option>
					<option value="4">$85-$100</option>
					</select>
					</td>
					
				  </tr>
				  <tr>
					<td>Image</td>
					<td width="80"><input type="file" name="image" id="fileField" ></td>
				  </tr>
				  <td>Key_Search</td>
					<td>
					  <input type="text" name="key" id="textfield_2"></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" id="submit" value="Upload"></td>
				  </tr>
				</tbody>
		</form>
			</table>
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
		<!-- make a Footer -->
		
		
		<div id='page_footer'>
		Copyright© ShiyunWang s46428134
		</div>
	</body>
</html>
	