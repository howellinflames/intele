<?php
	$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
	if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}

	mysqli_select_db("db_finals", $con);
  ?>
<html>
<body background="bg4.jpg">
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
	background-color: #CCFFFF;
	color: black;
}


}	
</style>
<div>
<form action="updateinventory.php" method="post">
	<?php
	$sql = "SELECT * FROM  tbl_inventory";
	$result = mysqli_query($con, $sql);

	echo "<center><table border='1' width='20%' ><center>
		<tr>
			<th>Item Name</th>
		</tr>";
	while($row = mysqli_fetch_array($result))
	  {
		echo "<tr>";
		echo "<td><input type='radio' name='item_name' value='". $row['item_name'] ."'>". $row['item_name'] ."</td>";
	  }
	?>
	<center><table border='1' width='20%' >
	<tr><td>Number of Item To Add:</td></tr>
	<tr>
		<td>
			<input type="text" name="item" required />
			<input type="submit" name="add" value="Add" />
		</td>
	</tr>
		<tr><td><center><input type="button" name = "back" value="Back" onclick="location='firstpage.php'"/></center></td></tr>
</form>
<center>
</div>
</body>  

</html>