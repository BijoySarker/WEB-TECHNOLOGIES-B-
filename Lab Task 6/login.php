<?php
	
	session_start();

	require_once 'controller/functions.php';
	$userName=$pass="";
	$userNameE=$passE="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["login"]))
	{
		$user=fetch_user_byusername($_POST["userName"]);

		if(empty($_POST['userName'])&&empty($_POST['userName']))
		{
			$userNameE="Username can not be empty!";
			$passE="Password can not be empty!";
		}
		if($user['ID']=='0')
		{
			$userNameE="Username does not exist!";
		}
		else
		{
			if($user['Username']==$_POST['userName']&&$user['Password']==$_POST['pass'])
			{	
				$_SESSION['ID'] = $user['ID'];

				if(isset($_POST['remember']))
				{
					setcookie('user', $user['Name'], time()+900);
				}

				header("Location: showAllFarmers.php");
			}
			elseif($user['Username']==$_POST['userName']&&$user['Password']!=$_POST['pass'])
			{
				$userNameE="Invalid Username!";
				$passE="Invalid Passoword!";
			}
		}

	}
	if(isset($_POST["back"]))
	{
		header("Location: home_page.php");
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body class="custom">
<table align="center">
        <tr>
          <td><a href="addFarmer.php"> Registration </a></td>
          <td><a href="login.php"> Login </a></td>
          <td><a href="home_page.php"> Home </a></td>
        </tr>
    </table>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
	<legend><b>LOGIN</b></legend><br>
	<table class="table">
		<tr>
			<td style="width: 15%"><label for="userName">Username:</label></td>
			<td><input type="text" name="userName" id="userName" value="<?php echo $userName?>"></td>
			<td style="width: 40%"><span class="error">* <?php echo $userNameE?></span></td>
		</tr>
		<tr>
			<td style="width: 15%"><label for="pass">Password:</label></td>
			<td><input type="password" name="pass" id="pass" value="<?php echo $pass?>"></td>
			<td style="width: 40%"><span class="error">* <?php echo $passE?></span></td>
		</tr>
		<tr style="text-align: right">
			<td><input style="margin: 0;" type="checkbox" name="rememer" id="remember" value=""></td>
			<td><label style="margin: 0;" for="remember">Remember me</label></td>
			<td style="width: 17%; text-align: right;"><input class="button" type="submit" name="login" value="LOGIN"></td>
			<td style="width: 10%; text-align: right;"><input class="back" type="submit" name="back" value="BACK"></td>
		</tr>
	</table>
</form>


</body>
</html>