<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<table align="center">
        <tr>
          <td><a href="addFarmer.php"> Registration </a></td>
          <td><a href="login.php"> Login </a></td>
          <td><a href="home_page.php"> Home </a></td>
        </tr>
    </table>

 <form action="controller/createFarmer.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="submit" name = "createFarmer" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

