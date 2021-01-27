<?php
    $string = 'Hello i\'m JavAscripT DeveLoper';

    $length = strlen($string);

    echo  '<strong>String:</strong> <br>'.$string.'<br><strong>Length Of String: </strong><br>'.$length.'<br><br>';

    if(isset($_GET['lower'])){
        echo 'Lowercase:'.strtolower($string);
    }

    if(isset($_GET['upper'])){
        echo 'Uppercase:'.strtoupper($string);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <button name="lower">Lowercase</button>
        <button name="upper">Uppercase</button>
    </form>
</body>
</html>