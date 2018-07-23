<?php
	$con = mysqli_connect("localhost","root","");
	if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}

	mysqli_select_db($con , "db_finals" );
  ?>
  
  <?php
  $fdate = $_POST['fdate'];
  $tdate = $_POST['tdate'];
  
  $sql = "SELECT * FROM sales_report WHERE Date_Purchase BETWEEN 'fdate' AND 'tdate' ";
  $result = mysqli_query($con, $sql);
  
  $sql = "SELECT amount, SUM('price' * 'qty_buy') AS total
             FROM sales_report
             GROUP BY prd_num" ; 
  $result = mysqli_query($con, $sql);
  
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


<td>
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
	 
	   $sql = "SELECT * FROM sales_report 
				  WHERE  Date_Purchase BETWEEN  '$fdate' AND '$tdate' ";
	   $result = mysqli_query($con, $sql);
	   
	   while($row = mysqli_fetch_array($result))  
     {  
		$amount = $row['price'] * $row['qty_buy']; 
		
     ?>  
	 
      <tbody><tr>  
         <td><?php echo $row["prd_num"]; ?></td>  
         <td><?php echo $row["item_name"]; ?></td>  
         <td><?php echo $row["price"]; ?></td>  
         <td><?php echo $row["qty_buy"]; ?></td>  
		 <td><?php echo $amount; ?></td>
		 <td><?php echo $row["Date_Purchase"]; ?></td> 
      </tr>
	  </tbody>
     <?php  
     }  
     ?> 
	  
	<tr><td colspan=6><center><input type="button" name = "back" value="Back" onclick="location='searchdate.php'"/> <button onclick="myFunction()">Print This Page</button></center></td></tr>
	 </form>
     </table> 
	 
	

	 
	<?php 
	
	$result1 = mysqli_query($con , "SELECT SUM(qty_buy) FROM sales_report") or die(mysqli_error());
	while ($rows1 = mysqli_fetch_array($result1)) {
	?>	
	<div class="pull-right">
		<div class="span">
			<div class="alert alert-info"><i class="icon-credit-card icon-large"></i>&nbsp;Total Quantity:&nbsp;<?php echo $rows1['SUM(qty_buy)']; ?></div>
		</div>
	</div>
	<?php } ?>
	
	 </div>
<script>
function myFunction() {
	window.print();
}
</script>
	 
  </body>  
 </html>  