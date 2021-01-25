<?php
    $str = 'naeemmemon60650@gmail.com';

    if(preg_match('/@/',$str)){
        echo 'mail id found';
    }
    else{
        echo 'your inputted string is not an Email Address';
    }
?>