<html>
<head>
<center><h1>Add Product</h1></center>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="bg3.jpg">


<style>
table, th, td {
    border: 1px solid black;
	padding: 20px;
}

td {
    background-color: #99FFCC;
    color: black;
}

table {
    background-color: #FFFFFF;
    color: black;
}
</style>

<form action="input.php" method="post">
<table align=center>
<tr>
<td>Product Number:</td><td><input type="text" name="prd_num" required /></td></tr><tr>
<td>Item Name:</td> <td><input type="text" name="item_name" required /></td></tr><tr>
<td>Price:</td> <td><input type="text" name="price" required /></td></tr><tr>
<td>Quantity:</td> <td><input type="text" name="qty" required /></td>
 </tr>
 <tr>
<td><center><input type="button" name="back" value="back" onclick="location='firstpage.php'" /></center></td>
<td><center><input type="submit" /></center></td>
</tr>
</div>
</table>
</form>
</body>
</html>