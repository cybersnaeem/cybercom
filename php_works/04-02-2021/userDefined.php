<?php 
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $db_name = 'userdb';

    class ServerException extends Exception {}

    try{
        if(!@mysqli_connect($host_name,$root,$password,$db_name)){
            throw new ServerException('Could not connected with database or server error..');
        }
        else{
            echo 'Connected..';
        }
    }catch(Exception $e){
        echo 'Error:'. $e->getMessage();
    }
    
?>