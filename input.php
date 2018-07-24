<html>
<body>

<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  


mysqli_select_db("db_finals", $con);

$sql1="INSERT INTO tbl_inventory (item_name, price, qty,prd_num)
VALUES
( '$_POST[item_name]' ,' $_POST[price]' , '$_POST[qty]','$_POST[prd_num]')";

$sql2="INSERT INTO tbl_sales (item_name, price, prd_num)
VALUES
( '$_POST[item_name]' ,' $_POST[price]' ,'$_POST[prd_num]')";

if (!mysqli_query($con,$sql1))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added"; 

if (!mysqli_query($con, $sql2))
  {
  die('Error: ' . mysqli_error());
  }
  ?>


<?php
mysqli_close($con)
?> 
<meta  http-equiv="refresh" content=".000001;url=inventory.php" />
</body>
</html>