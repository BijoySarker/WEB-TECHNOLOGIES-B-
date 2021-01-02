<?php

session_start();
header('location:../firstPage.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'farmer');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" User Already Taken";
}else{
    $reg= " insert into usertable(name , email , password) values ('$name' , '$email' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>

