<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("fashionista");
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float:left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: left;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 10%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

#m{background-color:#003;
width:100%;float:left;}
.j{width:100%;float:left;}
#s{width:50%;}
#d{width:100%;}
.p{border-radius:50px;}
.main{height:auto;
width:100%;border:7px solid white;}
.a{height:300px;
width:inherit;border:inherit}
.b{height:inherit;
width:33.3%;float:left;border:inherit;}
#i{float:left;height:299px;width:90%}
#x{float:left;height:250px;width:90%}
#y{float:left;height:270px;width:90%}
#u{width:100%;}
#b{background-color:#003;}
</style>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
		<body><div class="header">
	<div class="header-top">
		<div class="container" id="m" class="j">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				<div class="col-sm-10 logo animated wow fadeInLeft" data-wow-delay=".5s" >
					<img src="images/logo.png" height="80" width="400"></div><br>
                    <?php 
					if(isset($_SESSION['user_name'])){ ?>
                    <font color="white">Welcome,<?php echo $_SESSION['user_name'];?></font><?php }?>
                    
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1" class="n">
							<li><a href="index.php">HOME</a></li>
                            
                            <li><a href="about.php">ABOUT US</a></li> 
                            
                            <li><a href="wfashion.php">WOMEN'S FASHION</a></li>
                             <li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/cartt.png" height="50" width="50"><span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="women">
											<ul class="nav-list list-inline">
												<li><a href="cart.php">VIEW CART</a></li>
												<li><a href="order.php">MY ORDERS</a></li>
												<li><a href="logout.php">LOGOUT</a></li>
												
												
											</ul>
										  </div>
									   </div>
									</div></div></li>
									<!-- Nav tabs -->
								 <?php if(!isset($_SESSION['user_name'])){ ?>
                            <li><a href="../../register/reg/web/register.php">REGISTER</a></li>
                            <li><a href="../../login/web/login.php">LOGIN</a></li><?php }else{ ?>
                            <?php }?>	         
								
							</ul>
									   </div></div></div>
				
                                    
                    
                                   		
						<div class="search-container" id="b">
        <center>                
    <form action="search0.php" method="POST">
      <br><input type="text" placeholder="Search.." name="search" id="s">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form></center><br></div>

						
							
		</div>
	</div>
</div>			
									   
				
                                    
                    
                                   		
						
				
							
			
				
	
					
						
			
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
						s																
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<!--banner-->
<div class="banner">
	<div class="matter-banner">
	 	<img src="images/z1.jpg" width="1700" height="300">
        </div></div>
	    	

	
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
   <img src="images/z2.jpg" height="100" width="90" class="p"><br>
   <font size="33" color="black"><i>Clothing</i></font>  <hr> 
  <div class="main"><div class="a"> <div class="b"><center>
   <a href="top.php"><img src="images/z9.jpg"  id="i"></a>
   </div><div class="b">
   <a href="onepiece.php"><img src="images/zzz.jpg"  id="i"></a>
   </div><div class="b">
   <a href="kurti.php"><img src="images/zzz1.jpg"  id="i"></a></center>
   </div></div></div><br><hr>
   
  
  

	
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
   <img src="images/z4.jpg" height="100" width="90" class="p"><br>
   <font size="33" color="black"><i>Acessories</i></font>  <hr> 
  <div class="main"><div class="a"> <div class="b"><center>
   <a href="watch.php"><img src="images/x1.jpg"  id="i"></a>
   </div><div class="b">
   <a href="watch.php"><img src="images/x2.jpg"  id="i"></a>
   </div><div class="b">
  <a href="jwe.php"><img src="images/z6.jpg"  id="x"></a></center><br><center><font size="5"><b>Jewellery</b></font></center>
   </div></div></div><br><hr>
   
   

	
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
   <img src="images/z3.jpg" height="100" width="90" class="p"><br>
   <font size="33" color="black"><i>Footwares</i></font>  <hr> 
  <div class="main"><div class="a"> <div class="b"><center>
   <a href="heel.php"><img src="images/x4.jpg"  id="i"></a><br><center><font size="5"><b>Heels</b></font></center>
   </div><div class="b">
   <a href="shoe.php"><img src="images/x5.jpg"  id="i"></a><br><center><font size="5"><b>Flats</b></font></center>
   </div><div class="b">
   <a href="shoe.php"><img src="images/x6.jpg"  id="i"></a></center><br><center><font size="5"><b>Sports Shoes</b></font></center>
   </div></div></div><br><hr>
   
   <!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
   <img src="images/z5.jpg" height="100" width="90" class="p"><br>
   <font size="33" color="black"><i>Bags</i></font>  <hr> 
  <div class="main"><div class="a"> <div class="b"><center>
   <a href="bag.php"><img src="images/y1.jpg"  id="i"></a><br>heels
   </div><div class="b">
   <a href="bag.php"><img src="images/y2.jpg"  id="i"></a>
   </div><div class="b">
   <a href="bag.php"><img src="images/y3.jpg"  id="i"></a></center>
   </div></div></div><br><hr>
   
   
   
   
        
			
                 


			
<!--footer-->
<div class="footer" id="u">
	
	
        <div class="footer-bottom" id="u">
		<div class="container" id="u">
		<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2021 Fashionista . All Rights Reserved | Design by Samiksha Bhange </p>
			</div>
	</div></div></div>
</div>
<!--footer-->
</body>
</html>