<?php

session_start();

$con = mysqli_connect('localhost','root');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db ($con, "db_finals");

$sold=$_POST['itemsold'];
$item_name=$_POST['item_name'];



$sql = "SELECT * FROM  tbl_sales where item_name= '$item_name'";
$result = mysqli_query($sql, $con);



while($row = mysqli_fetch_array($result))
  {
	$price=$row['price'];
	$prd_num=$row['prd_num'];
	$qty_sold=$row['qty_sold'];
	$qty_buy=$row['qty_buy'];
  }
  
$add=$qty_sold+$sold;

$sql1 = "SELECT * FROM  tbl_inventory where item_name= '$item_name'";
$result1 = mysqli_query($sql1, $con);

$sql2= "SELECT * FROM sales_report where item_name= '$item_name' ";
$result2= mysqli_query($sql2, $con);


while($row = mysqli_fetch_array($result1))
  {
	$qty=$row['qty'];
  }
  $minus=$qty-$sold;
  
?>

<?php
//////////////////////////////////////////////////////////////////////////////////////////
//INVENTORY update//

	if ($sold > $qty)
{
?>

  <script type = 'text/javascript'>
//<!--
   alert("Not Enough Stock");
//-->
</script>
<?php

 }
	 else
{

	
    $sql="UPDATE  tbl_sales  SET qty_buy = '".$sold."' 
			 WHERE item_name = '".$item_name."'";
	$result=mysqli_query($sql, $con);
	
	
	$sql = "INSERT INTO sales_report (qty_buy, prd_num, item_name, price) 
				SELECT qty_buy, prd_num, item_name, price FROM tbl_sales
				WHERE item_name = '$item_name' " ;
	$result=mysqli_query($sql, $con);
	
	
	//UPDATE tables add to tbl_sales minus to tbl_inventory
	$sql="UPDATE  tbl_inventory  SET qty = '".$minus."' WHERE item_name = '".$item_name."'";
	$result=mysqli_query($sql, $con);
	
	$sql="UPDATE  tbl_sales  SET qty_sold = '".$add."' WHERE item_name = '".$item_name."'";
	$result=mysqli_query($sql, $con);		
		
}	



mysqli_close($con);
?>

<meta  http-equiv="refresh" content=".000001;url=sales.php" />