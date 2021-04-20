
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
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container" id="m" class="j">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s" >
					<img src="images/logo.png" height="80" width="400"><hr></div>
                    
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1" class="n">
							<li><a href="index.php">HOME</a></li>
                            
                            <li><a href="about.php">ABOUT US</a></li> 
                            <li><a href="../../register/reg/web/register.php">REGISTER</a></li>
                            <li><a href="../../login/web/login.php">LOGIN</a></li>
                             <li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCT CATEGORY<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="women">
											<ul class="nav-list list-inline">
												<li><a href="top.php">TOPS & T-SHIRTS</a></li>
												<li><a href="onepiece.php">WESTERN WEAR</a></li>
												<li><a href="kurti.php">TRADITIONAL KURTAS</a></li>
												<li><a href="watch.php">WATCHES</a></li>
												<li><a href="jwe.php">JEWELLERY</a></li>
												<li><a href="shoe.php">SPORT SHOES</a></li>
                                                <li><a href="heel.php">HIGH-HEELS</a></li>
                                                <li><a href="bag.php">BAGS</a></li>
											</ul>
										  </div>
									   </div>
									</div></div></li>
									<!-- Nav tabs -->
									         
								
							</ul>
									   </div></div></div>
				
                                    
                    
                                   		
						<div class="search-container" id="b">
        <center>                
    <form action="search.php" method="POST">
      <br><input type="text" placeholder="Search.." name="search" id="s">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form></center><br></div>
<div class="content">
	<div class="content">
	<div class="container"><br>
    
					



			
  
		
		<div class="content-top">
		<div class="content-top1">
			
						
					 			
                 


<?php 
mysql_connect("localhost","root","");
mysql_select_db("fashionista");
$id=$_GET['id'];
$sql="select * from kurti where id='$id'";
		$execute_query=mysql_query($sql);
		while($row=mysql_fetch_array($execute_query)){
 ?>
<div class="col-sm-4">
           
            <br><center><img src="images/<?php  echo $row['product_img'];?>" alt="" style="height:400px; width:200px;"></center>
              
           
           </div>
    <div class="col-sm-8">
     <h4 class="card-title">
            <h2> <?php echo $row['product_name']; ?>
                </h2></h4><br>
               
                <h3>Brand :<?php echo $row['product_brand']; ?></h3><br>
                
                 <h3>Rs. <?php echo $row['product_price']; ?>/-</h3><br>
               
    <h3><?php echo $row['product_details']; ?></h3><br>
    
<?php } ?>
    
  



        <form action="" method="POST" style="float:left;    margin-right:15px;">
    
   <input type="hidden" value="<?php echo $_GET['id']; ?>" name="prod_id">
    
  <input type="hidden" value="<?php echo $_SESSION['email']; ?>" name="cust_id">  
    
    <?php if(!isset($_SESSION['custname'])){ ?>
          
      <a href="login.php" class="btn btn-primary">
      Add to cart
      </a>   
          <?php }else{ ?>
    <input type="submit" class="btn btn-primary" value="Add to cart">
    <?php } ?>
    
    </form>
   
    <form action="" method="POST"  style="float:left;">
    
    <input type="submit" class="btn btn-primary" value="Buy Now">
    </form>
    <br><br>
     <form action="" method="POST"  style="float:left;">
   <textarea name="comment" placeholder="Add your Comment" required class="form-control"></textarea> 
    <input type="submit" class="btn btn-primary" value="Add Comment">
    </form> <br><br>
    
    
    
    
          




        
   </div></div></div></div>





        
 
</body>
   




<div class="footer">
	
	
        <div class="footer-bottom">
		<div class="container">
		<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2021 Fashionista . All Rights Reserved | Design by Samiksha Bhange </p>
			</div>
	</div></div>



</html>
			