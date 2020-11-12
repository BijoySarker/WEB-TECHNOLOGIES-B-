<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
 <H1>ADD PRODUCT</H1>
 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name"> Name </label><br>
  <input type="text" id="name" name="name"><br>
  <label for="buyingprice"> Buying Price </label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice"> Selling Price </label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
  <input type="radio" name="Display" herf=showALLProducts.php> Display <br>
  <input type="submit" name = "createProduct" value="Save"> 
</form> 

</body>
</html>

