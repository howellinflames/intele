<html>
<head>
<center><h1>Sales</h1></center>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="bg1.jpg">


<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("db_finals", $con);

$sql = "SELECT * FROM  tbl_sales";

$result = mysql_query($con, $sql);
?>

<style>


td {
    background-color: #FFFFFF;
    color: black;
}

th {
	background-color: #99CCFF;
	color: black;
}


</style>
<div class="container">
<table class="table table-bordered">
    <thead>

<?php

echo "
<tr>
<th>Product Number</th>
<th>Item Name</th>
<th>Price (Php)</th>
<th>Quantity Sold</th>
<th>Latest Purchase Date</th>
<th> </th>
</tr> </thead>";

?>


<?php

while($row = mysql_fetch_array($result))
  {
	  
  echo "<tbody><tr>";
echo "<td>" . $row['prd_num'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['qty_sold'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  
  ?>

	<td><input type="button" name="delete" value="delete" onclick="location='delete2.php?pdn= <?php echo $row['prd_num'] ?>'" /></td>
	<!--<td><input type="button" name = "add" value="add" onclick="location='addsales.php?pdn=<?php echo $row['prd_num'] ?> &qty_sold=<?php echo $row['qty_sold'] ?>'"/></td>-->
  <?php
  echo "</tr>";
  }
echo "<td colspan=6><center>";
?>
<input type="button" name = "back" value="Back" onclick="location='firstpage.php'"/></center></td></tbody>
</table>
</div>
<?php
mysql_close($con);
?> 

</body>
</html>