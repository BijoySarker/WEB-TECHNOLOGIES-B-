<?php  
require_once 'controller/farmerInfo.php';

$farmers = fetchAllFarmers();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Username</th>
            <th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($farmers as $i => $farmer): ?>
			<tr>
				<td><a href="showFarmer.php?id=<?php echo $farmer['ID'] ?>"><?php echo $farmer['Name'] ?></a></td>
				<td><?php echo $farmer['Username'] ?></td>
				<td><a href="editFarmer.php?id=<?php echo $farmer['ID'] ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	
</table>
</body>
</html>