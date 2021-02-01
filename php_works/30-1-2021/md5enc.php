<?php
    if(isset($_REQUEST['login'])){
        if(!empty($_REQUEST['userpass'])){
            
            $handle = fopen('./hash.txt','r');
            $file_password =fread($handle,filesize('./hash.txt'));
            //echo $file_password;
            if(md5($_REQUEST['userpass']) == $file_password){
                echo 'successful login..';
            }
            else{
                echo 'login failed..';
            }
        }
        else{   
            echo 'Please Enter Password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password check</title>
</head>
<body>
    <form action="#" method="post">
        Password: <input type="password" name="userpass"><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>