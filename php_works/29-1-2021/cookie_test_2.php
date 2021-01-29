<?php

     if(isset($_COOKIE['username'])){
        echo 'hello Cookie '.$_COOKIE['username'];
    }
    else{
        echo 'Oops.. Cookie Expired..';
    }
?>