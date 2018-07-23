<?php
	/*$connect=mysqli_connect("localhost","root","") or die("Unable to connect");*/
	
	$connect=mysqli_init(); //mysqli_ssl_set($connect, NULL, NULL, {ca-cert filename}, NULL, NULL); 
	mysqli_real_connect($connect, "websyst.mysql.database.azure.com", "snazzyhowell@websyst", "buttercup1.", "db_finals", "3306");

	mysqli_select_db($connect,"db_finals");
	if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	}
?>