<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysql_select_db("db_finals", $con);



?>

<?php
if(isset($_POST["fdate"], $_POST["tdate"]))
{
	$results = '';
	$data = "SELECT * FROM tbl_sales 
				  WHERE Date BETWEEN '".$_POST["fdate"]."' and ' ".$_POST["tdate"]." '  ";  
    $result = mysql_query($con, $data);
}

 $sold=  "SELECT qty_sold FROM tbl_sales";
 
 $result1 ="SELECT item_name FROM tbl_sales 
				  WHERE Date BETWEEN (" '$_POST["fdate"]' AND '$_POST["tdate"]' ")" ;
				  
 $res = mysql_query($result1, $con);


?>

<html>
<body>

<table border = '1'>

		<?php
	
	if ($salesreport = mysql_fetch_array($res))
  {
	  ?>
	  <tr>
			<td> <?php echo $res["item_name"]; ?> </td>
	  </tr>
<?php
  }
  ?>


</table>




<?php
mysql_close($con);
?> 
</body>
</html>