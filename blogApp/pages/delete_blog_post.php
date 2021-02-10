<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

require('./../connection/conn.php');
$dbobj = new Connection();

require('./../Controllers/blog_post.php');
$blog = new BlogPost();

$id = intval($_GET['id']);

$query = "delete from blog_post WHERE bid = '$id'";
$sql = $dbobj->con->query($query);

$blog->displayblogPost();

mysqli_close($dbobj->con);

?>
</body>
</html>