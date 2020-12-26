<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Request For New Category</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>


<h3>Request For New The Category</h3>

<div class="container">
  <form action="controller/newCategory.php" method="post">
    <label for="categoryname">Category Name</label>
    <input type="text" id="categoryname" name="categoryname" placeholder="Category name..">

    <label for="categoryparentname">Category’s parent Name</label>
    <input type="text" id="categoryparentname" name="categoryparentname" placeholder="Category’s parent name..">


    <label for="request">Reason For The New Category Request</label>
    <textarea id="request" name="request" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>