<?php
include('dbconfig/config.php');

if (isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	$_SESSIOM=array();
	?><meta http-equiv="refresh" content=".000001;url=Login_Page.php"/><?php
}
?>



<html>
<style>
table{
	position: relative;
	top: 60px;
}
</style>
<body background="bg2.jpg">



 <table style="width:100%" align='center'>
  <tr>
  
    <td><center>
		<a href="inventory.php"><img src="buttons/invsmall.png" alt="invsmall" border="0"></a></center>
	</td>
	
    <td>
		<center><a href="additem.php"><img src="buttons/aismall.png" alt="aismall" border="0"></a></center>
	</td>
	
    <td>
		<center><a href="addproduct.php"><img src="buttons/apsmall.png" alt="apsmall" border="0"></a></center>
	</td>
	
	<tr>
	
	<td>
		<center><a href="sales.php"><img src="buttons/salesmall.png" alt="salesmall" border="0"></a></center>
	</td>
	
	<td>
		<center><a href="addsales.php"><img src="buttons/asalesmall.png" alt="asalesmall" border="0"></a></center>
	</td>
	
	<td>
	<center><a href="editprice.php"><img src="buttons/epsmall.png" alt="epsmall" border="0"></a></center>
	</td>
	
	</tr>
	
  <tr>
			<td><center><a href="searchdate.php"><img src="buttons/srsmall.png" alt="srsmall" border="0"></a></center>
			<td>
				<center><a href="Logout.php"><img src="buttons/losmall.png" alt="losmall" border="0"></a></center>
			</td>
			<td>
			<pre></pre>
			</td>
  </tr>
  
</table>





</body>
</html>