<!DOCTYPE HTML>  
<html>
<head>
  <title>Change Password</title>
  <h1 > <img src="HR Company Logo Generator copy.jpg" alt="company" width="100" height="100"> Comapany </h1>
</head>
<body>
<table align="center">
	<tr>
    <td> Logged in <a href="VIEW PROFILE.php"> bob </a></td>
    <td><a href="LOGOUT.php"> Logout </a></td>
    </tr>
</table>

<h2>CHANGE PASSWORD</h2>

<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Retype New Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
</form>




<table align="center">
<tr>
<td><a href="LOGGED IN DASHBOARD.php"> Dashboard </a></td><br><br>
<td><a href="VIEW PROFILE.php"> View Profile </a></td><br><br>
<td><a href="EDIT PROFILE.php"> Edit Profile </a></td><br><br>
<td><a href="CHANGE PROFILE PICTURE.php"> Change Profile Picture </a></td><br><br>
<td><a href="CHANGE PASSWORD.php"> Change Password </a></td><br><br>
<td><a href="LOGOUT.php"> Logout </a></td><br><br>
</tr>
</table>
<?php include 'footer.php';?>
</body>
</html>