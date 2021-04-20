<?php
session_start();
if(isset($_SESSION['user_name'])){
	echo "<script>window.location.href='../../temp1/web/index.php';</script>";
	}
?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Space Register Form Flat Responsive Widget Template :: w3layouts</title>
 
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Space Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

	<!-- css files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //Online-fonts -->

</head>
<body background="images/bg3.jpg">

	<!-- Main Content -->
	<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3"> Register Form</h1>
			<div class="w3layouts-main">
				<h2><span>Register now</span></h2>
					<form action="" method="POST">
						<input placeholder="Enter Name" name="name" type="text" required>
                        <input placeholder="Contact Number" name="contact" type="text" required>
						<input placeholder="Enter Email" name="email" type="email" required>
						<input placeholder="Password" name="password" type="password"  id="password1" required>
                        <input placeholder="Enter Pincode" name="pincode" type="text" required>
					
						<input type="submit" value="Register" name="login">
					</form>
			</div>
			<!-- //main -->
			
			<!-- password-script -->
			<script>
				window.onload = function () {
					document.getElementById("password1").onchange = validatePassword;
					document.getElementById("password2").onchange = validatePassword;
				}

				function validatePassword() {
					var pass2 = document.getElementById("password2").value;
					var pass1 = document.getElementById("password1").value;
					if (pass1 != pass2)
						document.getElementById("password2").setCustomValidity("Passwords Don't Match");
					else
						document.getElementById("password2").setCustomValidity('');
					//empty string means no validation error
				}
			</script>
			<!-- //password-script -->

			<!--footer-->
			<div class="footer-w3l">
				<p>&copy; 2018 Space Register Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
			<!--//footer-->
			
		</div>
	</div>
	<!-- //Main Content -->

</body>
</html>
<?php

mysql_connect("localhost","root","");
mysql_select_db("fashionista");
if(isset($_POST['name'])){
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];
$pincode=$_POST['pincode'];

$sql="INSERT INTO registration1(user_name,user_contact, user_email,user_password, user_pincode)VALUES ('$name','$contact','$email','$password','$pincode')";
$execute_query=mysql_query($sql);
if($execute_query){
	echo "<script>alert('You have Registered Succesfully!!');window.location.href='../../../login/web/login.php';</script>";
	}else{
		echo mysql_error();
		}
}
?>
