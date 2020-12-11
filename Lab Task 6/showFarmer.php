<?php  
require_once 'controller/farmerInfo.php';

$farmer = fetchFarmer($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Username</th>
		<th>Password</th>
	</tr>
	<tr>
		<td><a href="showFarmer.php?id=<?php echo $farmer['ID'] ?>"><?php echo $farmer['Name'] ?></a></td>
		<td><?php echo $farmer['Username'] ?></td>
		<td><?php echo $farmer['Password'] ?></td>
	</tr>

</table>

</body>
</html>