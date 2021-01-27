<?php
    $str = 'naeemmemon60650@gmail.com';

    if(preg_match('/@/',$str)){
        echo 'mail id found';
    }
    else{
        echo 'your inputted string is not an Email Address';
    }

    echo "<br><br>";

    $str = "this is good  GOOD person.. the person good enough";
    $pattern = "/good/";
    echo "match found ". preg_match_all($pattern, $str);
?>