<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

require('./connection/Contact.php');
$dbobj = new Contact();

$id = intval($_GET['id']);

$query = "delete from contacts WHERE id = '$id'";
$sql = $dbobj->con->query($query);

$dbobj->displayData();

mysqli_close($dbobj->con);

?>
</body>
</html>