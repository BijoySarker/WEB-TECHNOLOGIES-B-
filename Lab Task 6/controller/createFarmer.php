<?php  
require_once '../model.php';


if (isset($_POST['createFarmer'])) {
	$data['name'] = $_POST['name'];
	$data['username'] = $_POST['username'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);

  if (addFarmer($data)) {
      echo 'Successfully added!!';
      header('Location: ../login.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>