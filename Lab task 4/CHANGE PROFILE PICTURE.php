<!DOCTYPE HTML>  
<html>
<head>
  <title>Change Profile Picture</title>
  <h1 > <img src="HR Company Logo Generator copy.jpg" alt="company" width="100" height="100"> Comapany </h1>
</head>
<body>
<table align="center">
	<tr>
    <td> Logged in <a href="VIEW PROFILE.php"> bob </a></td>
    <td><a href="LOGOUT.php"> Logout </a></td>
    </tr>
</table>

<h2>PROFILE PICTURE</h2>
<img src="login logo.jpg" alt="logo" width="100" height="100"><br><br>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 500000){
         $errors[]='File size must be excately 5 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>

<form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" /><br><br>
         <input type="submit"/>
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