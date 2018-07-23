<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style2.css">
<style>	

table {
	box-shadow: 10px 10px 5px #888888;
}

p {
    font-family: Arial, Helvetica, sans-serif;
}


div {
	position: relative;
	top: 60px;
	
}
</style>
</head>
<body background="login.jpg">
<div>
				
					<form action="index.php" method="POST">
					<table align=center bgcolor="#ffccff" bordercolor="white" style="border-radius: 10px;">
					<tr>
						<td style="color:006905"><br><p><b>Username:</b></p></td>
						<td><br><input name="username" type="text" name="username" placeholder="Enter Username" style="border-radius: 5px; background-color:#ccffcc" required/> </td>
					</tr>
					<tr>
						<td style="color:006905"><p><b>Password:</b></p></td>
						<td><input name="password" type="password" name="password" placeholder="Enter Password" style="border-radius: 5px; background-color:#ccffcc" required/></td>
					</tr>
						</form>

					
					<tr align="right">
						<td colspan=2 style="padding: 10px">
							<button name="login" type="submit" class="btn">Log in</button>
						</td>
					</tr>			
								</table>
								</div>
	<?php
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			
			$query="SELECT * FROM userinfotable WHERE username='$username' AND password='$password'";
			$query_run=mysqli_query($connect,$query);
			
			while($row=mysqli_fetch_array($query_run))
			{
				$user=$row['username'];
				$pw=$row['password'];
				$ID=$row['id'];
				$user_type=$row['usertype'];
				$fullname=$row['fullname'];
			
				if($username==$user && $pw==$password)
				{
					$_SESSION['username']=$user;
					$_SESSION['password']=$pw;
					$_SESSION['id']=$ID;
					$_SESSION['usertype']=$user_type;
					$_SESSION['fullname']=$fullname;
					header('location:firstpage.php');
				}	
				else
				{
					//invalid
					echo '<script type="text/javascript"> alert("Invalid Username or Password") </script>';
				}
			}
		}
		/*else
		{
			echo '<script type="text/javascript"> alert("Logging Out!") </script>';
		}*/
	?>
</body>
</html>