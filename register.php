<?php
    require('config.php');
    if(isset($_POST['submit'])){
        echo "submitted";
    }
    error_reporting(0);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass= mysqli_real_escape_string($conn, $_POST['pass']);
    $query = "INSERT INTO users(name, password) VALUES ('$name' , '$pass')";
    if(mysqli_query($conn, $query)){
        echo "account created";
        

    }
    else{
        echo 'ERROR';
    }
            
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
    <div class="main">
        Register
    </div><br>
    <form action="register.php" method="post">
     <input type="text" name="name" id="name" size="60" placeholder="Name" required><br><br>
     <input type="password" name="pass" id="pass" size="60" placeholder="Password" required><br><br>
    <input type="submit" value="submit" class="btn">
    <h3>Already a user<a href="index.php">Login Now</a></h3>

    </form>
</body>
</html>