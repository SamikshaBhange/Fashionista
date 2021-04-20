<?php
session_start();
if(!isset($_SESSION['admin_name'])){
echo "<script>window.location.href='index.php';</script>";
	}
 ?>     
 <html>
  <head>
  
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
     
     <style>
	 .main{border:1px solid black;
	 height:auto;width:100%;}
	 .a{border:1px solid black;
	 height:100px;width:100%;background-color:#003;}
	 .b{border:1px solid black;
	 height:1400px;width:100%;}
	 .c{border:1px solid black;
	 height:400px;width:100%;background-color:black;}
	 #d{height:70px;width:50%;}
	 #e{height:70px;width:50%;}
	 #f{height:70px;width:50%;}
	 #k{height:120px;width:50%}
	 @font-face{
font-family:myfirst;
src:url(fonts/Aladin-Regular.ttf);}
	 
	 </style>
     
  </head>
  <body>
  <center>
  <div class="main">
  <div class="a"><img src="logo.png" height="95"width="605"></div>
  <div class="b">
 
<font size="55"color="#003" align="left">Uploading Watches</font><hr><hr>
<form action="" method="POST" enctype="multipart/form-data">
<br><label><font color="black" size="10"> Product Name</font></label>
<input type="text"name="pname"placeholder="Type Product Name" class="form-control" required autofocus id="d" autocomplete="off"><br>
<br><label><font color="black" size="40">Product Price</font></label>
<input type="number"name="pprice"placeholder="Type Product Price" class="form-control" required autofocus id="d" autocomplete="off"><br>
<label><font color="black"size="40">Product Brand</font></label>
<input type="text"name="pbrand"placeholder="Type Product Brand" class="form-control" required autofocus id="e" autocomplete="off"><br>
<label><font color="black" size="20">Product Details</font></label>
<textarea name="details" placeholder="Type Product Details" required class="form-control" id="k"></textarea><br><br>
<div class="control-group"><br>
											<label><font color="black" size="20">Product Image</font></label>
											
				<input type="file" name="filedata" required>
											
							

										
										<div class="control-group">
											
												<button type="submit" class="btn btn-info" value="register">Submit Form</button>
										
										</div>
									</form>
                                     <br><br> <center><a href="uploadpro.php"><img src="back.jpg" height="50" width="50"></a></center>
						
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		
	
</center>
</div>
<div class="c">
<center>
<br><br><br><br><br><font size="6" color="white">2021 Fashionista.Designed by Samiksha Bhange
</font></center>


</div>

 </body>
</html>
<?php

mysql_connect("localhost","root","");
mysql_select_db("fashionista");

if(isset($_POST['pname'])){
$pname=addslashes($_POST['pname']);
$pprice=addslashes($_POST['pprice']);
$pbrand=addslashes($_POST['pbrand']);
$details=addslashes($_POST['details']);


$filename=$_FILES['filedata']['name']; 
$tmp_name=$_FILES['filedata']['tmp_name'];
$location="../images/";
move_uploaded_file($tmp_name,$location.$filename);
$sql="INSERT INTO watch(product_name, product_price, product_brand, product_details, product_img) VALUES ('$pname', '$pprice', '$pbrand', '$details', '$filename');";
$execute_query=mysql_query($sql);
if($execute_query){
	echo "<script>alert('Product Record Created!!');</script>";
	}else{
		echo mysql_error();
		}
}
?>