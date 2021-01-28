<?php
    if(isset($_GET['getDetails'])){
        $browser = get_browser(null,true);
        print_r($browser);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Browser Details</title>
</head>
<body>
    <form action="getBrowser.php" method="get">
        <button type="submit" name="getDetails">::Get Browser Detail::</button>
    </form>
</body>
</html>