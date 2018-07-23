<html>
<head>
<center><h1>Inventory</h1></center>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="bg.jpg">


<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("db_finals", $con);

$sql = "SELECT * FROM  tbl_inventory";

$result = mysql_query($sql, $con);
?>

<style>

table {
	position: relative;
}

td {
    background-color: #FFFFFF;
    color: black;
}

th {
	background-color: #FF99CC;
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
<th>Quantity</th>
<th>Latest Inventory Update</th>
<th></th>
</tr> </thead>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
echo "<td>" . $row['prd_num'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['qty'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  
  ?>
 
	<td><input type="button" name="delete" value="delete" onclick="location='delete1.php?pdn= <?php echo $row['prd_num']; ?>'" /></td>
  <?php
  echo "</tr>";
  }

?>
<tr><td colspan=6><center><input type="button" name = "back" value="Back" onclick="location='firstpage.php'"/></center></td></tr>
</table>
</div>
<?php

mysql_close($con);
?> 

</body>
</html>