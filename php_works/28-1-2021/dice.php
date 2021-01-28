<?php
    if(isset($_POST['roll'])){
        $dice = rand(1,6);
        echo "<img src =./imgs/$dice.jpg >";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Generate</title>
</head>
<body>
    <form action="dice.php" method="post">
        <button name="roll">Roll Dice</button>
    </form>
</body>
</html>