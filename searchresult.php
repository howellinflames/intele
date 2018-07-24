<?php
	$con=mysqlii_init(); //mysqlii_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqlii_real_connect($con, "websyst.mysqli.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");
	if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}

	mysqli_select_db("db_finals", $con);
  ?>
<?php  

 if(isset($_POST["fdate"], $_POST["tdate"]))  
 {  
  $results = '';  
  $data = "select * from sales_report where Date between '".$_POST["fdate"]."' and '".$_POST["tdate"]."'  
  ";  

  $result = mysqli_query($con, $data);  
  $results .= '  
   <table border="1" align="center">  
     <tr>  
         <th width="40%">Product Name</th>  
         <th width="10%">Price</th>  
         <th width="25%">Quantity</th>  
		 <th width="25%">Amount</th>  
     </tr>  
  ';  
  if(mysqli_num_rows($result) > 0)  
  {  
   while($row = mysqli_fetch_array($result))  
   {  
    $results .= '  
     <tr>  
        <td>'. $row["item_name"] .'</td>  
        <td>'. $row["price"] .'</td>  
        <td>'. $row["qty_sold"] .'</td>  
        <td>'. $row["Date"] .'</td>  
       </tr>  
    ';  
   }  
  }  
  else  
  {  
   $results .= '  
    <tr>  
         <td colspan="6">No Records Found</td>  
    </tr>  
   ';  
  }  
  $results .= '</table>';  
  echo $results;  
 }  
 ?>