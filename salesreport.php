<?php
session_start();
?>
 <?php
 $data = "select * from tbl_sales order by emp_id asc";  
 $result = mysqli_query($conn, $data);  
 ?>  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inventory System</title>
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
</head>
<body>
<form action="report.php" method="POST">
	From: <input name="fdate" type="text" class="tcal"/>
	To: <input name="tdate" type="text" class="tcal"/>
	<input name="" type="submit" value="Search" />
	</form>
</body>
</html>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>