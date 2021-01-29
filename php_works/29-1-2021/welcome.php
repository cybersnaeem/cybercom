<?php
    session_start();

    if(isset($_SESSION['username'])){
        echo '<h2>Welcome</h2>'.$_SESSION['username'];    
    }
    else{
        header('Location:login.php');
    }

?>

<a href="./logout.php">Logout</a>