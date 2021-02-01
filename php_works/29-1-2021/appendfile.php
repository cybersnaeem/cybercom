<?php
    if(isset($_REQUEST['click'])){
        if(!empty($_POST['myinput'])){
            $data = $_POST['myinput'];
            $file = fopen('myfile.text','a');
            fwrite($file,$data."\n");
        }
        else{
            echo 'please Enter Text';
        }
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>append in file</title>
</head>
<body>
    <form action="./appendfile.php" method="post">
        <input type="text" name="myinput">
        <input type="submit" name="click" value="Add">
    </form>
</body>
</html>