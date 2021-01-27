<?php
    error_reporting(0);
    $name = "Cybercom Creation";

    function get(){
        global $name;
        echo "I am ".$name;
    }

    get();
?>