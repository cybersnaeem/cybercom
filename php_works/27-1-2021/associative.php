<?php
    $salaries = array("dishant" => 20000, "pratik" => 10000, "pinak" => 50000);

    echo '<strong>Actual Array is:</strong>';
    print_r($salaries);
    echo '<br>';
    
    //array_keys funvtion is used to get all the keys from the associative array
    echo '<br><strong>Keys Of This Array:</strong>';
    $data = array(); 
    $data = array_keys($salaries);
    print_r($data);

    echo '<br><br><strong>Value Access:</strong>';
    echo   '<br><strong>'.$data[0].'</strong>\'s Salary is : '. $salaries['dishant'].'<br>';
    echo   '<strong>'.$data[1].'</strong>\'s Salary is : '.$salaries['pratik'].'<br>';
    echo  '<strong>'.$data[2].'</strong>\'s Salary is : '.$salaries['pinak'].'<br>';



?>