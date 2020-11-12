<?php  
require_once '../model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buyingprice'] = $_POST['buyingprice'];
	$data['sellingprice'] = $_POST['sellingprice'];

  if (addProduct($data)) {
  	 echo 'Successfully added!!';
  	 header('Location: ../showAllProducts.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>