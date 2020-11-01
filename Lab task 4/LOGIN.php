<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<h1 > <img src="HR Company Logo Generator copy.jpg" alt="company" width="100" height="100"> Comapany </h1>
</head>
<body>

<form action="welcome.php" method="post">
	
	<table align="center">
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<tr>
			<td>username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
			
		</tr>
		<tr>
			<td><a href="FORGOT PASSWORD.php"> Forgot password</a></td>
		</tr>

		<table align="center">
<tr>
<td><a href="REGISTRATION.php"> Registration </a></td>
<td><a href="LOGIN.php"> Login </a></td>
<td><a href="PUBLIC HOME.php"> Home </a></td>
</tr>
</table>
	</table>
	
</form>
<?php include 'footer.php';?>
</body>
</html>