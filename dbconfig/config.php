<?php
	/*$connect=mysqli_connect("localhost","root","") or die("Unable to connect");*/
	
	$con=mysqli_init(); //mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($con, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");

	mysqli_select_db($con,"db_finals");
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
	}
?>