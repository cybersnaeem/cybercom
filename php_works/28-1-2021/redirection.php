<?php ob_start(); ?>

<h2>hello world</h2>
<?php
    $redirect_url = "https://www.google.com/";
    $permission = true;

    if($permission) {
        header('Location:'.$redirect_url);
    }
?>