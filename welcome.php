<?php
    require('config.php');
    if (isset($_POST["submit"])){
        echo"";}
    error_reporting(0);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass= mysqli_real_escape_string($conn, $_POST['msg']);
    $query = "INSERT INTO chatting(name, msg) VALUES ('$name' , '$pass')";
    if(mysqli_query($conn, $query)){
        printf();
        

    }
    else{
        printf();
    }

            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App</title>
    <script>
        function ajax(){

            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200){
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET' , 'chat.php', true);
            req.send();

        }
        setInterval(function(){ajax();},1000);
    </script>
    <link rel="stylesheet" href="skeleton.css">
    <style>
        .chat-data{
            background-color:#33C3F0;
            display:grid;
            grid-template-columns:40% 50% ;
            text-align:center;
    
           
        }
        .chat{
            height:80vh;
            
            
        }
        .header{
            display:flex;
            flex-direction:column;
            background-color:#33C3F0;
            height:18vh;
            text-align:center;
            justify-content:center;
            color:white;
        }
        *{
            margin:0%;
        }
        span{
            font:bolder;
        }
        .name, .msg , .time{
            color:white;
            font:bold;
        }
        input{
            width:100%;
        }
        .button{
            width:10vw;
        }
        @media(max-width:550px){
            input{
                width:80vw;
            }
            .button{
                width:80vw;
            }
        }
    </style>










    
</head>
<body onload="ajax();">
<div class="header">
       <h3> Welcome to Doubt clearing forum</h3>
</div>
        
<br>
    <div class="container">
        <div class="chat-box">
        <div id="chat"></div>
                
                <br>
            <form action="welcome.php" method="post">
            <input type="text" name="name" id="name"  required placeholder="Name"><br>

                    <input type="text" name="msg" id="msg"  required placeholder="Message"><br>
                    <input type="submit" value="Submit" class="button button-primary">
                </form>
        </div>
    </div>
</body>
</html>