<?php
session_start();
?>

<?php
$con = mysqlii_connect('localhost','root');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

$add_item=$_POST['item'];
$item_name=$_POST['item_name'];
  
mysqli_select_db("db_finals", $con);

//////////////////////////////////////////////////////////////////////////////////////////
//INVENTORY update//

$sql1 = "SELECT * FROM  tbl_inventory where item_name= '$item_name'";
$result1 = mysqli_query($sql1, $con);

while($row = mysqli_fetch_array($result1))
  {
	$qty=$row['qty'];
  }

$add=$qty+$add_item;

$sql="UPDATE  tbl_inventory  SET qty = '".$add."' WHERE item_name = '".$item_name."'";
$result=mysqli_query($sql);


mysqli_close($con);
?>

<meta  http-equiv="refresh" content=".000001;url=inventory.php" />

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>