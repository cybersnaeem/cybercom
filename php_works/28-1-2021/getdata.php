<?php
    if(isset($_GET['uname']) && isset($_GET['uemail'])){
        if(!empty($_GET['uname']) && !empty($_GET['uemail'])){
            $username = $_GET['uname'];
            $useremail =$_GET['uemail'];    

            echo 'Username is: '.$username.' and Email is : '.$useremail;
        }
        else{
            echo 'Please Fillup Fields..'; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET method</title>
</head>
<body>
    <form action="getdata.php" method="get"> 
        <input type="text" name="uname" placeholder="Enter Username" /><br /><br />
        <input type="email" name="uemail" placeholder="Enter Email" /><br /><br />
        <button type="submit" name="submit">Get Values</button>
    </form>
</body>
</html>