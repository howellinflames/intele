<?php
$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db("db_finals", $con);

?>

<?php 
 $data = "select * from sales_report ";  
 $result = mysqli_query($con, $data);
 $get=mysqli_query($data); 

while($row=mysqli_fetch_array($get))
{
	$price = $row['price'] ;
	$qty_buy = $row['qty_buy'] ;
}
 ?>  
 
 
 <html>  
  <head>  
   <title>Sales Report</title>
<center><h1>Sales Report</h1></center>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body background="bg7.jpg"> 
  
<form action="sample111.php" method="post">
<div class="container">
<table class="table table-bordered">
<tr>
<td>From:</td><td><input type="date" name="fdate" required /></td>
<td>To:</td> <td><input type="date" name="tdate" required /></td>
<td colspan=2><center><input type="submit" /></center></td>
 </tr>  
<style>


td {
    background-color: #FFFFFF;
    color: black;
}

th {
	background-color: #ffccff;
	color: black;
}


</style>
<div class="container">
<table class="table table-bordered">

    <thead>
      <tr>  
         <th>Product Number</th>  
         <th>Product Name</th>  
         <th>Price (Php)</th>  
         <th>Quantity</th>  
		 <th>Amount(php)</th>
		 <th>Date/Time</th>  
      </tr>  
	  </thead>
     <?php  
     while($row = mysqli_fetch_array($result))  
     {  
     ?>  
      <tbody><tr>  
         <td><?php echo $row["prd_num"]; ?></td>  
         <td><?php echo $row["item_name"]; ?></td>  
         <td><?php echo $row["price"]; ?></td>  
         <td><?php echo $row["qty_buy"]; ?></td>  
		 <td><?php echo $row['price'] * $row['qty_buy']; ?></td>
		  <td><?php echo $row["Date_Purchase"]; ?></td> 
      </tr> </tbody>
     <?php  
     }  
     ?> 
	 
	<tr><td colspan=6><center><input type="button" name = "back" value="Back" onclick="location='firstpage.php'"/></center></td></tr>
	 </form>
     </table> 
	 </div>
	 
  </body>  
 </html>  
 