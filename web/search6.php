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
#l{border:1px solid lightgrey;}
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
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s" >
					<img src="images/logo.png" height="80" width="400"><hr></div>
                    
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1" class="n">
							<li><a href="index.php">HOME</a></li>
                            
                            <li><a href="about.php">ABOUT US</a></li> 
                            <li><a href="../../register/reg/web/register.php">REGISTER</a></li>
                            <li><a href="../../login/web/login.php">LOGIN</a></li>
                             <li><a href="wfashion.php">WOMEN'S FASHION</a></li>
									<!-- Nav tabs -->
									         
								
							</ul>
									   </div></div>
				
                                    
                    
                                   		
						<div class="search-container" id="b">
        <center>                
    <form action="search6.php" method="POST">
      <br><input type="text" placeholder="Search.." name="search" id="s">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form></center><br></div>
  
						
					 



      
<br><br>
<?php 
$search=$_POST['search'];

?><div class="content">
	<div class="container">
		 <div class="col-md-11 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					



			
  
			<center><h1><i><?php echo "Your Search Result for <strong>$search</strong>";?>
</i></h1></center><br><br>	</div>
		<div class="content-top">
		<div class="content-top1">
			
					
           
        <div class="row">



<?php 

mysql_connect("localhost","root","");
mysql_select_db("fashionista");




$sql="select * from  shoes where product_name like '%$search%'";
		$execute_query=mysql_query($sql);
		$count=mysql_num_rows($execute_query);
if($count=='0'){
	echo "<h3>We've Not Found Any Product!!</h3>";
}else{
		while($row=mysql_fetch_array($execute_query)){
 ?>

          <div class="col-lg-4 col-md-6 mb-4" id="l">
            <a href="productdetail6.php?id=<?php echo $row['id']; ?>"><div class="card h-100">
            <center>  <img class="card-img-top" src="images/<?php  echo $row['product_img'];?>" alt="" style="height:200px; width:130px;">
              </center><div class="card-body">
                <h4 class="card-title">
              <?php echo $row['product_name']; ?>
                </h4>
                <h5>Rs. <?php echo $row['product_price']; ?>/-</h5>
               
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </a></div>
          </div>


<?php } ?>
<?php }?>


         





        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div></div>
  <!-- /.container -->
<!--footer-->

  

  <!-- Bootstrap core JavaScript -->
 
	
        <div class="footer-bottom">
		<div class="container">
		<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2021 Fashionista . All Rights Reserved | Design by Samiksha Bhange </p>
			</div>
	</div>
</div>

</body>


</html>
