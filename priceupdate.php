<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$new_price=$_POST['newprice'];
$item_name=$_POST['item_name'];
  
mysql_select_db("db_finals", $con);

//////////////////////////////////////////////////////////////////////////////////////////
//INVENTORY update//

$sql1 = "SELECT * FROM  tbl_inventory where item_name= '$item_name'";
$sql2 = "SELECT * FROM  tbl_sales where item_name= '$item_name'";

$sql3 = "SELECT * FROM  tbl_inventory where price= '$new_price'";
$sql4 = "SELECT * FROM  tbl_sales where price= '$new_price'";


$result1 = mysql_query($sql1, $con);
$result2 = mysql_query($sql2, $con);
$result1 = mysql_query($sql3, $con);
$result2 = mysql_query($sql4, $con);

while($row = mysql_fetch_array($result1))
  {
	$new_price=$row['newprice'];
  }

while($row = mysql_fetch_array($result2))
  {
	$new_price=$row['newprice'];
  }

$sql="UPDATE  tbl_inventory  SET price = '".$new_price."' WHERE item_name = '".$item_name."'";
$result=mysql_query($sql);
$sql="UPDATE  tbl_sales  SET price = '".$new_price."' WHERE item_name = '".$item_name."'";
$result=mysql_query($sql);

mysql_close($con);
?>

<meta  http-equiv="refresh" content=".000001;url=inventory.php" />
