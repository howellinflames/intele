<?php
	$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
	if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}

	mysqli_select_db($con, "db_finals");
  ?>
<html>
<head>
<center><h1>Edit Price</h1></center>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="bg6.jpg">
<style>
table{
	position: relative;
	top: 40px;
	width: 30%;
}

td,th{
	padding: 20px;
}

th{
	background-color:#FF6699;
}

td{
	background-color: #BDC3C7;
}

#item_name{
 width:150px;   
}

</style>
<form action="priceupdate.php" method="post">
<center>

<div>
<table border='3' width='20%'><tr><th colspan=2><center>
<?php
$sql = "SELECT * FROM tbl_inventory";
$result = mysqli_query($con, $sql);

echo "<select name='item_name' id='item_name'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['item_name'] ."'>" . $row['item_name'] ."</option>";
}
echo "</select>";
?></center></th></tr></div>

	<center>
	<tr><td>New Price:</td>
		<td>
			<input type="text" name="newprice" required />
			<input type="submit" name="add" value="Add" />
		</td>
		</tr>
	<tr><td colspan=2><center><input type="button" name = "back" value="Back" onclick="location='firstpage.php'"/></center></td></tr>
</form>

</body> 
</html>