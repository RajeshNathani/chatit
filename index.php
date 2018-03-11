<?php
   include("config.php");
   session_start();
   
   
      // username and password sent from form 
      error_reporting(0);
      $name = mysqli_real_escape_string($conn, $_GET['name']);
      $pass= mysqli_real_escape_string($conn, $_GET['pass']);
      $sql = "SELECT `id`, `name`, `password` FROM `users` WHERE name = '$name' and password = '$pass'";
      $result = mysqli_query($conn , $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
 
</head>
<body>
    <div class="main">
        Login
    </div><br>
    <form action="index.php"  method="get">
     <input type="text" name="name" id="name" size="60" placeholder="Name"><br><br>
     <input type="password" name="pass" id="pass" size="60" placeholder="Password"><br><br>
    <input type="submit" value="submit" class="btn">
    <h3>New here? <a href="register.php">Register Now</a></h3>
    </form>
</body>
</html>