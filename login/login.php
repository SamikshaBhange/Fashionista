<?php
session_start();
if(isset($_SESSION['custname'])){
	echo "<script>window.location.href='index.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register | Mobi Shop</title>

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

<h1>Login Here</h1><hr>

 
     <form action="login.php" method="POST">
    
       <br>
        <input type="email" name="email" required autofocus placeholder="Enter  Email" class="form-control">
        
        <br>
        <input type="password" name="password" required autofocus placeholder="Enter  Password" class="form-control">
        
        
      <br>
         
         <input type="submit" class="btn btn-info btn-block btn-lg" value="Login">
     
     
     </form>
        
<br>

     
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<br><br><br><br><br>
  <?php include "includes/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>


</html>
<?php
include "Admin_Panel/includes/connect.php";
if(isset($_POST['email'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from customer where email='$email' AND password='$password'";
$execute_query=mysql_query($sql);
$count=mysql_num_rows($execute_query);
if($count=='1'){
	while($row=mysql_fetch_array($execute_query)){
		$custname=$row['cust_name'];
		}
	$_SESSION['custname']=$custname;
	$_SESSION['email']=$email;
	echo "<script>window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('Incorrect USername & Password!!');</script>";	
		}
}
?>