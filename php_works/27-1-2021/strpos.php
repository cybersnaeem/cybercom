<?php
    //not ignore case
    $string = "I am Naeem Valiyani And I'm an IT Student"; 
    $search = "student";     

    function Search($search, $string){ 
        $position = strpos($string, $search, 5);   
        if ($position == true){ 
            return "$search Found at posiion " . $position."<br>"; 
        } 
        else{ 
            return "$search Not Found"."<br>"; 
        } 
    } 
   
    echo Search($search, $string); 


    // ignore case 
    $string1 = "I am Naeem Valiyani And I'm an IT Student"; 
    $search1 = "student";     

    function Search1($search1, $string1){ 
        $position = stripos($string1, $search1);   
        if ($position == true){ 
            return "$search1 Found at posiion " . $position."<br>"; 
        } 
        else{ 
            return "$search1 Not Found"."<br>"; 
        } 
    } 
   
    echo Search1($search1, $string1); 
?>