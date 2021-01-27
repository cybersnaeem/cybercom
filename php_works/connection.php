<?php
    /*echo 'hello <br><br>';

    //die('sorry your execution ... stop');
    //or
    exit('ok.. something went wrong');

    echo 'world';*/

    error_reporting(0);
    
    mysqli_connect('localhost','root','') or die('Error While Connecting...');

    echo 'Connected !!!';
?>