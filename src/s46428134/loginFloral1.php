<!doctype html>
<?php include ('floralFunction.php')?>

<html>
	<head>

	  <title>Shiyun</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
	  <meta content="utf-8" http-equiv="encoding" />
	  <link rel="stylesheet" type="text/css" href="css/floral1.css" />
	 
	  
	</head>

	<body>
		<!-- headerlogo -->
		<div id='logo'>
		<img src="ch_llaca_1.jpg" width='255'height='110' /></div>
		<!-- header -->
	  
	  <div><h2>Shiyun Floral</h2> 
	  </div>
	  
	  <span id="phone_information">
	  <p><img src="telep.jpg" align="middle" width='29'height='29' />
	  To place an order through phone, please call: <b>0123 456 987<b>
	 </p>
	 </span>
	  
     <!-- main menue -->
		  <ul id="tab_pages">
				<li><a href="index.php">Home</a></li>

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
			
			<div id="login">
			<h2>Sign-in</h2>
			<form action="flowerLogin.php" method="POST">
			<div>UserName:
			<input type="text" name="Uname" ></div></br>
			<div>Password:
			<input type="text" name="email" ></div></br>
			<input type="Submit" value="login" name="submit">
			<input type="reset" value="Cancel">
			
			</form>
			</div>
			
			
		
    </body>
</html>
	