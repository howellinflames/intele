<?php
	session_start();
	require 'Include/conn.php';
	
	if(isset($_POST['logout']))
	{
		session_unset();
		session_destroy();
		$_SESSION=array();?>
		<meta http-equiv="refresh" content=".000001;url=indexx.php"/><?php
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
	</head>
		<body><?php
			
			$query="SELECT * FROM userinfotable WHERE username='$_SESSION[username]'";
			$query_run=mysqli_query($connect,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				while($row=mysqli_fetch_array($query_run))
				{
					
					echo "<center>".$row['username']."</center>";?><br><br><?php
					
				}
			}
		?></center></b></h5>
			<form action="logout.php" method="POST">
				<center><button name="logout" type="submit" class="logoutbtn">Logout</button><br></center>
			</form>
		</center>
	</body>
</html>