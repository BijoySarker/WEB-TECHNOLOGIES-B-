<?php

	require_once 'controller/functions.php';


	$passdata="";
	$pass=$repeatpass=$previouspass="";
	$passE=$repeatpassE=$previouspassE="";
	$update=$_GET['update'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["update"]))
	{
			if(empty($_POST["pass"]))
				{ $passE="Password cannot be empty!";}
			elseif(!preg_match("/[a-zA-Z0-9][^ #!:$^&]{5,}$/", $_POST["pass"]))
			{
				$passE="Must be of Length:6 and must contain lowercase, uppercase,number. Cannot contain '#!:$^&' ";
			}
			elseif($_POST["pass"]==$_POST["repeatpass"])
			{
				$passdata=$_POST["pass"];
			}
			if(empty($_POST["repeatpass"]))
				{ $repeatpassE="Repeat Password cannot be empty!";}
			elseif($_POST["pass"]!=$_POST["repeatpass"])
			{
				$repeatpassE="Must match with password!";
			}
			if($user['password']==$_POST["previouspass"] && isset($passdata))
			{
				$data['id']=$user['id'];
				$data['password']=$passdata;
				update_password($data);
				$updatemessage="Successfully Updated";
				header("Location: ChangePasswordPage.php?update=".$updatemessage);
			}
			else
			{
				$previouspassE="Doesn't match with password!";
			}

	}
	if(isset($_POST["back"]))
	{
		header("Location: LoggedPage.php");
	}
	if(isset($_POST["reset"]))
	{
		header("Location: ChangePassword.php?update=");
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body class="custom">
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
	<legend><b>Change Password</b></legend><br>
	<table class="table">
		<tr>
			<td><label for="pass">Previous Password:</label></td>
			<td><input type="password" name="previouspass" id="previouspass" value="<?php echo $previouspass?>"></td>
			<td><span class="error">* <?php echo $previouspassE?></span></td>
		</tr>
		<tr>
			<td><label for="pass">Password:</label></td>
			<td><input type="password" name="pass" id="pass" value="<?php echo $pass?>"></td>
			<td><span class="error">* <?php echo $passE?></span></td>
		</tr>
		<tr>
			<td><label for="repeatpass">Repeat Password:</label></td>
			<td><input type="password" name="repeatpass" id="repeatpass" value="<?php echo $repeatpass?>"><br></td>
			<td>* <?php echo $repeatpassE?></span></td>
		</tr>
		<tr>
			<td><input class="button" type="submit" name="update" value="Update"></td>
			<td><input class="back" style="border-radius: 4px;" type="submit" name="back" value="BACK"></td>
			<td><input class="back" style="border-radius: 4px;" type="submit" name="reset" value="RESET"></td>
			<td>* <?php echo $update?></span></td>
		</tr>
	</table>
</form>


</body>
</html>