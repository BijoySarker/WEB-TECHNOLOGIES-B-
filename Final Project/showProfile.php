<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `fname`, `lname`, `age`, `dateofbirth`, `phone`, `country`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `profile`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "farmer");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
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
        <a class="nav-link" href="profile.php">Edit Profile</a>
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
<h3>Profile</h3>
        <form action="" method="post">
            <table class="center">
            <?php while($row = mysqli_fetch_array($search_result)):?>
                    Id = <?php echo $row['id'];?> <br>
                    Name = <?php echo $row['fname'];?> <?php echo $row['lname'];?> <br>
                    Age = <?php echo $row['age'];?> <br>
                    Date Of Birth = <?php echo $row['dateofbirth'];?> <br>
                    Phone = <?php echo $row['phone'];?> <br>
                    Country = <?php echo $row['country'];?> <br>

                <?php endwhile;?>
            </table>
        </form>

        <?php include 'Controller/footer.php';?>

    </body>
</html>
