<?php
   $cookie_name ='user_mail';
   if(isset($_REQUEST['set'])){
       $cookie_value = $_REQUEST['email'];
       $cookie_expire = time()+60*60*24*2;
       setcookie($cookie_name, $cookie_value, $cookie_expire);
   }
?>
<!DoCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <h3>Forget Password</h3>
    <form action="" name="" method="POST">
        Email: <input  type="email" name="email"><br><br>
        <input type="submit" value="Submit" name="set">
    </form>
    <hr>
    <?php
    if(isset($_COOKIE[$cookie_name])){
        echo "Cookie Name is ". $cookie_name . " and value is " . $_COOKIE
        [$cookie_name] . "<br>";
    } else {
        echo "Cookie not set";
    }
    ?>
</body>
</html>