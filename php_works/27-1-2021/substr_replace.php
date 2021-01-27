<?php
    $string = 'hello i am naeem valiyani';

    $rep_string = 'memon';

    echo "Actual String: $string <br>";
    echo "After Applying Substr :".substr_replace($string,$rep_string,17);
?>