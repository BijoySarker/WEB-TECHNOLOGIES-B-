<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "farmer";

$categoryname = "";
$parentcategory = "";
$comment = "";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['categoryname'];
    $posts[1] = $_POST['parentcategory'];
    $posts[2] = $_POST['comment'];

    return $posts;
}

// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `category`(`categoryname`, `parentcategory`, `comment`) VALUES ('$data[0]','$data[1]','$data[2]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo'<script type="text/javascript"> alert ("Data Insertes") </script>';
            }else{
                echo'<script type="text/javascript"> alert ("Data Not Inserted") </script>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Request For New Category</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 16px;
  text-align: center;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="continar text-uppercase">
  <a class="navbar-brand font-weight-bold text-black" href="welcome.php">Farm Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="showProfile.php">Show Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
        </li>
  </div></br></br>
</div>
</nav>
<section></br></br>
<div>

</section>
</div></br></br>
<h3>All Product</h3>

<div class="container">
  <form action="" method="post">
    <label for="categoryname">Category Name</label>
    <input type="text" id="categoryname" name="categoryname" placeholder="Category name..">

    <label for="categoryparentname">Category’s parent Name</label>
    <input type="text" id="categoryparentname" name="categoryparentname" placeholder="Category’s parent name..">


    <label for="request">Reason For The New Category Request</label>
    <textarea id="request" name="request" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<?php include 'Controller/footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



