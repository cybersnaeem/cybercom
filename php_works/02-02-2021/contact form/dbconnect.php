<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userdb";

    @$conn = new mysqli($hostname,$username,$password,$dbname) or die('Error While Connecting..'); 

?>

