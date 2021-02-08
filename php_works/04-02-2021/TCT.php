<?php
    $age = 19;
    try{
        if($age >= 18){
            echo 'Eligible For Voting';
        }
        else{
            throw new Exception('Not Eligible For Voting');
        }
    }
    catch(Exception $ex){
        echo 'Error:'.$ex->getMessage();
    }
?>