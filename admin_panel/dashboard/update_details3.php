<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
 
<font size="55"color="#003" align="left">Forms</font><hr><hr>
<form action="" method="POST" enctype="multipart/form-data">
 
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$id=$_GET['id'];

mysql_connect($dbhost,$dbuser,$dbpass);

mysql_select_db("fashionista");
$result = mysql_query("SELECT * FROM allproducts WHERE id=".$_GET['id']);
if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}

while($row=mysql_fetch_array($result)){?>


   
  

<br><label><font color="black" size="10"> Product Name</font></label>
<input type="text"name="pname"placeholder="Type Product Name" class="form-control" value="<?php echo $row['product_name']; ?>" required autofocus id="d" autocomplete="off"><br>
<br><label><font color="black" size="40">Product Price</font></label>
<input type="number"name="pprice"placeholder="Type Product Price" class="form-control" value="<?php echo $row['product_price']; ?>" required autofocus id="d" autocomplete="off"><br>
<label><font color="black"size="40">Product Brand</font></label>
<input type="text"name="pbrand"placeholder="Type Product Brand" value="<?php echo $row['product_brand']; ?>" class="form-control" required autofocus id="e" autocomplete="off"><br>
<label><font color="black" size="20">Product Details</font></label>
<input type="text" name="pdetails" placeholder="Type Product Details" value="<?php echo $row['product_details']; ?>" required class="form-control" id="k"></textarea><br><br>

											<label><font color="black" size="20">Product Image</font></label><br><br>
				 <img src='../images/<?php  echo $row['product_img']; ?>' height='200' width='200'><?php }?>							
				
                <input type="file" name="filedata" required >
							

										
										<div class="control-group">
											
												<button type="submit" class="btn btn-info" value="register">Submit Form</button>
										
										</div>
									</form>
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

$dbhost='localhost';
$dbuser='root';
$dbpass='';

mysql_connect($dbhost,$dbuser,$dbpass);


if(isset($_POST['pname'])){
$name=addslashes($_POST['pname']);
$price=addslashes($_POST['pprice']);
$brand=addslashes($_POST['pbrand']);
$details=addslashes($_POST['pdetails']);
$filename=$_FILES['filedata']['name']; 
$tmp_name=$_FILES['filedata']['tmp_name'];
$location="../images/";
move_uploaded_file($tmp_name,$location.$filename);
$id=$_GET['id'];
$abc=mysql_select_db("fashionista");
$sql="update allproducts set product_name='$name',product_price='$price',product_brand='$brand',product_details='$details',product_img='$filename' where id='$id'";
$abc=mysql_query($sql);
if($abc)
{
echo "<script>alert('product detail updated!');</script>";

}
else{
echo mysql.error();}}

?>