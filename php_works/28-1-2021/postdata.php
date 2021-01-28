<?php
    $myPassword = '1234';
    if(isset($_POST['upass'])){
        if(!empty($_POST['upass'])){
            $userpass = $_POST['upass'];    

            if($userpass === $myPassword){
                echo "<b>Password Match</b>"; 
            }else{
                echo "<b>Password Not Match</b>";
            }
        }
        else{
            echo 'Please Fillup Field..'; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST method</title>
</head>
<body>
    <form action="postdata.php" method="post"> 
        <input type="password" name="upass" placeholder="Enter Password" /><br /><br />
        <button type="submit" name="submit">Post Values</button>
    </form>
</body>
</html>