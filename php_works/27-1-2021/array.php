<?php
    $names = array('naeem','pratik','pinak','dishant');
    
    //sizeof function to find length of an array
    for($i=0;$i<sizeof($names);$i++){
        echo '<strong>'.$names[$i].'</strong> at Position <strong>'.$i.'</strong><br>';
    }
    echo '<br>';
    print_r($names);
?>