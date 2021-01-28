<?php
    //echo "<pre>";
    //print_r($_SERVER);


    if(isset($_REQUEST['phpSelf'])){
        //return full path excepting hostname  /git_project/cybercom/php_works/28-1-2021/server.php
        echo $_SERVER['PHP_SELF']; 
        echo "<br>";  
    }
    if(isset($_REQUEST['serverName'])){
        //return hostname  eg. localhost
        echo $_SERVER['SERVER_NAME'];  
        echo "<br>";  
    }
    if(isset($_REQUEST['httphost'])){
        //return hostname with port no eg. localhost:82
        echo $_SERVER['HTTP_HOST']; 
        echo "<br>";   
    }
    if(isset($_REQUEST['userAgent'])){
        //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36
        echo $_SERVER['HTTP_USER_AGENT']; 
        echo "<br>";   
    }
    if(isset($_REQUEST['scriptName'])){
        // file path  /git_project/cybercom/php_works/28-1-2021/server.php
        echo $_SERVER['SCRIPT_NAME']; 
        echo "<br>"; 
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER superglobal </title>
</head>
<body>
    <form action="server.php" method="post">
        <button name="phpSelf">
            ['PHP_SELF']
        </button>
        <button name="serverName">
            ['SERVER_NAME']
        </button>
        <button name="httphost">
            ['HTTP_HOST']
        </button>
        <button name="userAgent">
            ['HTTP_USER_AGENT']
        </button>
        <button name="scriptName">
            ['SCRIPT_NAME']
        </button>
    </form>
</body>
</html>