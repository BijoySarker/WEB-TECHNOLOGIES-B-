<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`productname`, `buyingprice`, `sellingprice`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `product`";
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
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
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
        
        <form action="" method="post">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Buying Price</th>
                    <th>Selling Price</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['productname'];?></td>
                    <td><?php echo $row['buyingprice'];?></td>
                    <td><?php echo $row['sellingprice'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <?php include 'Controller/footer.php';?>
    </body>
</html>
