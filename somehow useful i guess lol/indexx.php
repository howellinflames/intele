<?php
	session_start();
	require 'Include/conn.php';
?>
<html>
<body>
<style>
td {padding: 10; text-align:center;}
</style>
<form action="indexx.php" method="POST">
<table  align=center>
	<tr>
		<td>
			Username:
		</td>
		<td>
			<input type="text" name="txt_un" />
		</td>
	</tr>
	<tr>
		<td>
			Password:
		</td>
		<td>
			<input type="password" name="txt_pw" />
		</td>
	</tr>
	<tr>
		<td colspan="2" align=right>
		<input type="submit" name="login" value="Log-in"/>
		</td>
	</tr>
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['txt_un'];
			$password=md5($_POST['txt_pw']);
			
			$query="SELECT * FROM userinfotable WHERE username='$username' AND password='$password'";
			$query_run=mysqli_query($connect,$query);

			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				header('location:login.php');
			}
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("Invalid") </script>';
			}
		}
	?>
</table>
</form>
</body>
</html>