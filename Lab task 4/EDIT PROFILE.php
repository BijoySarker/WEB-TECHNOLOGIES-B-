<!DOCTYPE HTML>  
<html>
<head>
  <title>Edit Profile</title>
  <h1 > <img src="HR Company Logo Generator copy.jpg" alt="company" width="100" height="100"> Comapany </h1>
</head>
<body>
<table align="center">
	<tr>
    <td> Logged in <a href="VIEW PROFILE.php"> bob </a></td>
    <td><a href="LOGOUT.php"> Logout </a></td>
    </tr>
</table>

<?php
$nameErr = $emailErr = $genderErr  = $degreeErr = $bloodgroupErr = $dateErr = "";
$name = $email = $gender = $degree = $bloodgroup = $dateofbirth = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["dateofbirth"])) {
    $dateErr = "Date is required";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }

   if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Blood Group is required";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h2>EDIT PROFILE</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth:  
  <input type="date" name="dateofbirth" 
        placeholder="dd-mm-yyyy" value="dateofbirth"
        min="1953-01-01" max="1998-12-31">
  <span class="error"><?php echo $dateErr;?></span>
  <br><br> 
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error"><?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <input type="radio" name="degree" value="ssc">SSC
  <input type="radio" name="degree" value="hsc">HSC
  <input type="radio" name="degree" value="bsc">BSc
  <input type="radio" name="degree" value="msc">MSc
  <span class="error"><?php echo $degreeErr;?></span>
  <br><br>
  Blood Group:
  <select id="bloodgroup" name="bloodgroup">
    <option> </option>
    <option value="a+">A+</option>
    <option value="a-">A-</option>
    <option value="b+">B+</option>
    <option value="b-">B-</option>
    <option value="o+">O+</option>
    <option value="o-">O-</option>
    <option value="ab+">AB+</option>
    <option value="ab-">AB-</option>
  
  <span class="error"><?php echo $bloodgroupErr;?></span>
  </select><br><br>
  <input type="submit" name="submit" value="Submit">  
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
