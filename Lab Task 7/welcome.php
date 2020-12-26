<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:firstPage.php');
}

?>

<html>
    <head>
        <title> Home Page </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="design/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    </head>
    <body>
        <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="continar text-uppercase">
  <a class="navbar-brand font-weight-bold text-white" href="#">Farm Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Edit Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Change Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
  </div>
</div>
</nav>
<section class="header-section">
    <div class="center-div">
    <h1 class="font-weight-bold"> Welcome <?php  echo $_SESSION['username']; ?> </h1>
    <p> Welcome To Our Food Farm </p>
    <div class="header-buttons">
        <a href="#">AboutUs</a>
        <a href="#">Contact</a>
     </div>
</section>
</div>


<!--***********Header part end ********-->
    
<section class="header-extradiv">
    <div class="container">
        <div class="row">
        <div class=" extra-div col-lg-4 col-md-4 col-12">
            <a href="#"><i class="fa-3x fa fa-globe" aria-hidden="true">
            </i></a>
        <h2>Pending/Delivered Orders</h2>
        <p>All Pending And Delivered Orders Here</p>
        </div>

        <div class=" extra-div col-lg-4 col-md-4 col-12">
            <a href="#"><i class="fa-3x fa fa-paper-plane" aria-hidden="true"></i></a>
        <h2>Power Users and Send Coupons</h2>
        <p>Send Coupons Your Power Users</p>
        </div>

        <div class=" extra-div col-lg-4 col-md-4 col-12">
            <a href="requestForNewCategory.php"><i class="fa-3x fa fa-plus" aria-hidden="true"></i> </a>
        <h2>Request For Category</h2>
        <p>Request To Admin For New Category</p>
        </div>
    </div>
</div>
</section>
    
    
    


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
