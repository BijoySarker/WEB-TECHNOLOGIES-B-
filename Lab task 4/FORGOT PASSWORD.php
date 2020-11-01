<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
	<h1 > <img src="HR Company Logo Generator copy.jpg" alt="company" width="100" height="100"> Comapany </h1>
</head>
<body>

<?php
$emailErr = "";

if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
?>

<form>
  <h2>FORGOT PASSWORD</h2>
E-mail: <input type="text" name="email">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<table align="center">
<tr>
<td><a href="REGISTRATION.php"> Registration </a></td>
<td><a href="LOGIN.php"> Login </a></td>
<td><a href="PUBLIC HOME.php"> Home </a></td>
</tr>
</table>
<?php include 'footer.php';?>
</body>
</html>