<?php

$string = "i am naeem valiyani.. my instagram id is naeem_memon_";
$find_string = "naeem";
$lastPos = 0;
$positions = array();
        //5      //string..     ,naeem        ,1st time 0
while ($lastPos = strpos($string, $find_string, $lastPos)) {
    $positions[] = $lastPos;//5
                //5 +
    $lastPos = $lastPos + strlen($find_string);
}


foreach ($positions as $value) {
    echo $value ."<br />";
}

?>