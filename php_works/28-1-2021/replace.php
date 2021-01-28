<?php
    $string = "Hello I'm Naeem Valiyani.. and i'm Student";
    $replace = "Software Trainee";
    $change_string = "Student";
    
    echo 'Actual String is: '.$string."<br><br>";
    echo 'Replaced String is: '.str_replace($change_string,$replace,$string)."<br><br>";

    $change_string_ignore = "student";  
    echo 'Replaced String is with Ignore Case: '.str_ireplace($change_string_ignore,$replace,$string);
?>