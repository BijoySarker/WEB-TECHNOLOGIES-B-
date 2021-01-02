<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "farmer";

$id = "";
$fname = "";
$lname = "";
$age = "";
$dateofbirth = "";
$phone = "";
$country = "";

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
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['age'];
    $posts[4] = $_POST['dateofbirth'];
    $posts[5] = $_POST['phone'];
    $posts[6] = $_POST['country'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM profile WHERE id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $age = $row['age'];
                $dateofbirth = $row['dateofbirth'];
                $phone = $row['phone'];
                $country = $row['country'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `profile`(`fname`, `lname`, `age`, `dateofbirth`, `phone`, `country`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')";
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

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `profile` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo'<script type="text/javascript"> alert ("Data Deleted") </script>';
            }else{
                echo'<script type="text/javascript"> alert ("Data Not Deleted") </script>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `profile` SET `fname`='$data[1]',`lname`='$data[2]',`age`=$data[3], `dateofbirth`='$data[4]',`phone`='$data[5]', `country`='$data[6]' WHERE `id` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo'<script type="text/javascript"> alert ("Data Updated") </script>';
            }else{
                echo'<script type="text/javascript"> alert ("Data Not Updated") </script>';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}

?>

<!DOCTYPE Html>
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
<link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
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
        <a class="nav-link" href="showprofile.php">Show Profile</a>
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
            <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
            <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>"><br><br>
            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>"><br><br>
            <input type="number" name="age" placeholder="Age" value="<?php echo $age;?>"><br><br>
            <label for="dateofbirth">Date Of Birth:</label>
            <input type="date" name="dateofbirth" placeholder="Enter Date Of Birth"/><br><br>
            <input type="text" name="phone" placeholder="Enter Phone Number"/><br><br>
            <label for="country">Country:</label>
  <input type="text" name="country" onkeyup="showHint(this.value)">
<p>Suggestions: <span id="txtHint"></span></p>
            <div>
                <input type="submit" name="insert" value="Add">
                
                <input type="submit" name="update" value="Update">
                
                <input type="submit" name="delete" value="Delete">
        
            </div>
        </form>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
