<?php

    session_start();

    if(isset($_REQUEST['login'])){
        if(!empty($_POST['uname']) && !empty($_POST['upass']))
        {
            $username = $_POST['uname'];
            $userpass = $_POST['upass'];
            if($username === 'admin' && $userpass === 'admin'){
                $_SESSION['username'] = $username;
                header('Location:welcome.php');
            }
            else{
                echo 'Wrong Credentials'; 
            }
        } 
        else{
            echo "Please Fillout Fields";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login here..</title>
</head>
<body>
    <center>
        <form  method="post">
            <h2>Login Here..</h2>
            Username:
            <input type="text" name="uname" placeholder="Enter Username"><br><br>
            Password:
            <input type="password" name="upass" placeholder="Enter Password"><br><br>
            <input type="submit" value="Login" name="login"/> 
        </form>
    </center>
</body>
</html>