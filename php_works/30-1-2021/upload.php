<?php
    if(isset($_POST['upload'])){
        $name = $_FILES['picture']['name'];
        $tmp_name =$_FILES['picture']['tmp_name'];

        if(!empty($name)){
            $location = './upload/';
            if(move_uploaded_file($tmp_name,$location.$name)){
                echo 'file uploaded';
            }
            else{
                echo 'error';
            }
        }   
        else{
            echo 'Please Select File..';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>