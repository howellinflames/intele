<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	$connect=mysqli_connect("localhost","root","") or die("Unable to connect");
	mysqli_select_db($connect,"db_finals");
	
	error_reporting (E_ALL ^ E_NOTICE);
?>