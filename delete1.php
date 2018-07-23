<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_finals", $con);
$pdn=$_REQUEST['pdn'];
mysql_query("DELETE FROM tbl_inventory  WHERE prd_num = $pdn");
mysql_close($con);
?>

<meta  http-equiv="refresh" content=".000001;url=inventory.php" />
