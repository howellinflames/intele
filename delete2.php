<?php
$con = mysql_connect('localhost','root');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_finals", $con);
$pdn=$_REQUEST['pdn'];
mysql_query("DELETE FROM tbl_sales  WHERE prd_num = $pdn");
mysql_close($con);
?>

<meta  http-equiv="refresh" content=".000001;url=sales.php" />
