<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

require('./../connection/conn.php');
$dbobj = new Connection();

require('./../Controllers/catagory.php');
    $cat = new Catagory();

$id = intval($_GET['id']);

$query = "delete from categories WHERE category_id = '$id'";
$sql = $cat->con->query($query);

$cat->displayCat();

mysqli_close($dbobj->con);

?>
</body>
</html>