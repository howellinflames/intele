<html>
<body>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  


mysql_select_db("db_finals", $con);

$sql1="INSERT INTO tbl_inventory (item_name, price, qty,prd_num)
VALUES
( '$_POST[item_name]' ,' $_POST[price]' , '$_POST[qty]','$_POST[prd_num]')";

$sql2="INSERT INTO tbl_sales (item_name, price, prd_num)
VALUES
( '$_POST[item_name]' ,' $_POST[price]' ,'$_POST[prd_num]')";

if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added"; 

if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }
  ?>


<?php
mysql_close($con)
?> 
<meta  http-equiv="refresh" content=".000001;url=inventory.php" />
</body>
</html>