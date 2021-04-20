<?php
session_start();
?><!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
<?php include "includes/header.php"; ?>
  <div class="container">
<?php include "includes/category.php"; ?>

      <div class="col-lg-9">


        <div class="row">



<?php 

mysql_connect("localhost","root","");
mysql_select_db("fashionista");

$sql="select * from product";
		$abc=mysql_query($sql);
		while($row=mysql_fetch_array($abc)){
 ?>

           <div class="col-sm-4">
           <center> <br> <img class="card-img-top" src="images/<?php  echo $row['product_img'];?>" alt="" style="height:200px; width:130px;">
              </center>
           
           </div>s
    <div class="col-sm-8">
     <h4 class="card-title"><br>
              <?php echo $row['product_name']; ?>
                </h4>
               
                <h5>Brand <?php echo $row['product_brand']; ?></h5>
                
                 <h5>Rs. <?php echo $row['product_price']; ?>/-</h5>
               
    <p align="justify"> <?php echo $row['product_details']; ?></p>
    
    
    </div>
    
    
    
          


<?php } ?>


         





        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php include "includes/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>


</html>
