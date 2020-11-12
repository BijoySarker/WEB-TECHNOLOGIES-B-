<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
<H1>DISPLAY</H1>
<table>
	<thead>
		<tr>
			<th> Name </th>
			<th> Buying Price </th>
			<th> Selling Price </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product_db): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product_db['id'] ?>"><?php echo $product_db['name'] ?></a></td>
		        <td><?php echo $product_db['buyingprice'] ?></td>
		        <td><?php echo $product_db['sellingprice'] ?></td>
		        <td><a href="editProduct.php?id=<?php echo $product_db['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $product_db['id'] ?>">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>