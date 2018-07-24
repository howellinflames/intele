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
<body background="bg5.jpg">
<style>


@font-face {
    font-family: myFirstFont;
    src: url(calibri.ttf);
}

div {
   font-family: myFirstFont;
}

table, th, td {
    border: 1px solid black;
	padding: 20px;
}

td {
    background-color: #FFFFCC;
    color: black;
}

table {
    background-color: #FFFFFF;
    color: black;
}

th{
	background-color: #9999CC;
	color: black;
}


}	
</style>
<div>
<form action="update2.php" method="post">
<table border='1' width='20%' align='center' >
<tr><th>Select Product</th></tr>
<tr><td><center>	
	<?php
$sql = "SELECT * FROM tbl_inventory";
$result = mysqli_query($sql, $con);

echo "<select name='item_name' id='item_name'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['item_name'] ."'>" . $row['item_name'] ."</option>";
}
echo "</select>";
?></center></td></tr>


	<tr><th>Number of Item To Add:</th></tr>
	<tr>
		<td>
			<input type="text" name="itemsold" required/>
			<input type="submit" name="add" value="Add" />
		</td>
	</tr>
	<tr><td><center><input type="button" name = "back" value="Back" onclick="location='firstpage.php'"/></center></td></tr>
</form>
</div>
</body> 
</html>