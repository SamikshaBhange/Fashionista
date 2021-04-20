<?php
mysql_connect("localhost","root","");
mysql_select_db("fashionista");
session_start();
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sales Inquiry Form Responsive Widget Template| Home :: W3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<!--header-->
	<div class="agile-header">
		<h1>Customer Details</h1>
		
	</div>
	<!--//header-->
	<!--main-->
	<div class="agileits-main">
		<div class="wrap">
		<form action="" method="POST">
			<ul>
				<li class="text">Name  :  </li>
				<li><input name="name" type="text" required></li>
			</ul>
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="E-mail" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Contact no  :  </li>
				<li><input name="contact" type="text" required></li>
			</ul>
			
			
			<ul>
				<li class="text">Address 1  :  </li>
				<li><input name="address" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Address 2  :  </li>
				<li><input name="addr 2" type="text" required></li>
			</ul>
            <ul>
				<li class="text">Landmark :  </li>
				<li><input name="addr 2" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Country  :  </li>
				<li><input name="country" type="text" required></li>
			</ul>
			<ul>
				<li class="text">State  :  </li>
				<li><input name="state" type="text" required></li>
			</ul>
			<ul>
				<li class="text">City  :  </li>
				<li><input name="city" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Pin Code  :  </li>
				<li><input name="pin" type="text" required></li>
			</ul>
            
			<ul><li><input type="hidden" value="<?php echo $_GET['id']; ?>" name="prod_id"></li></ul>
    
  <ul><li><input type="hidden" value="<?php echo $_SESSION['user_email']; ?>" name="cust_id"> </li></ul> 
    
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" value="place your order">
				<input type="reset" value="reset">
               
			</div>
			</form>
		</div>	
	</div>
<!--//main-->
<!--footer-->
<div class="footer-w3">
	<p> All rights reserved | Design by Samiksha Bhange</p>
</div>
<!--//footer-->
</body>
</html>
 <?php

mysql_connect("localhost","root","");
mysql_select_db("fashionista");
if(isset($_POST['address'])){
$prod_id=$_POST['prod_id'];
$cust_id=$_POST['cust_id'];
$address=$_POST['address'];
$city=$_POST['city'];
$sql="insert into cart(product_id,customer_id,purchase_status,address,city)values('$prod_id','$cust_id','1','$address','$city')";
$execute_query=mysql_query($sql);
if($execute_query=='0'){
	echo "<script>alert('You have Added Product to Cart!!')</script>";
	}else{
		echo mysql_error();
		}
}

?>