<?php 
	
	require_once 'controller/functions.php';
	$src="";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body class="custom border">
	<table >
		<tr >
			<td><a href="">Dashboard</a></td>
		</tr>
		<tr>
			<td><a href="ViewProfilePage.php">View Profile</a></td>
		</tr>
		<tr>
			<td><a href="EditProfilePage.php?update=">Edit Profile</a></td>
		</tr>
				<tr>
			<td><a href="changePassword.php?update=">Change Password</a></td>
		</tr>
		<tr>
			<td><a href="controller/logout.php">Logout</a></td>
		</tr>
	</table>
</body>
</html>