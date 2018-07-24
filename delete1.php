<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db("db_finals", $con);
$pdn=$_REQUEST['pdn'];
mysqli_query("DELETE FROM tbl_inventory  WHERE prd_num = $pdn");
mysqli_close($con);
?>

<meta  http-equiv="refresh" content=".000001;url=inventory.php" />
