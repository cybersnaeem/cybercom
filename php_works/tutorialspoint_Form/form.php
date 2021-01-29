<?php
    $errName = "";
    $errEmail ="";
    $errTime = "";
    $errclasses = "";
    $errgender = "";
    $errsubject = "";
    $errAgree = "";

    //trim - remove white space from the begining and ending of the string
    //stripslashes = Un-quotes a quoted string
    //htmlspecialchars() = Convert special characters to HTML entities

    
    function checkData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(!isset($_POST['checked'])){
        $errAgree = "Please Accept Terms And Conditions";            
    }
    if(isset($_REQUEST['submit'])){
        if(!empty($_POST['name'])){
            $name = checkData($_POST['name']);
        }
        else{
            $errName = "Name Is Required";            
        }

        if(!empty($_POST['email'])){
            $email = checkData($_POST['email']);
        }
        else{
            $errEmail = "Email Is Required";            
        }
        
        if(!empty($_POST['time'])){
            $time = checkData($_POST['time']);
        }
        else{
            $errTime = "Time Is Required";            
        }

        if(!empty($_POST['class'])){
            $class = checkData($_POST['class']);
        }
        else{
            $errclasses = "Class Is Required";            
        }
        if(!empty($_POST['gender'])){
            $gender = $_POST['gender'];
        }
        else{
            $errgender = "Gender Is Required";            
        }
        if (!empty($_POST["subject"])) {
            $subject = $_POST["subject"];	
         }else {
            $errsubject = "You must select 1 or more";
         }
         
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
<center>
<form method = "POST" action = "form.php">
        <hr>
        <h2>Registration</h2>
        <hr>
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class="error"><?php echo $errName; ?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "email" name = "email">
                  <span class="error"><?php echo $errEmail; ?></span>
               </td>
            </tr>
            
            <tr>
               <td>Time:</td>
               <td> <input type ="time" name ="time">
                  <span class="error"><?php echo $errTime; ?></span>
               </td>
            </tr>
            
            <tr>
               <td>Classes:</td>
               <td> <textarea name="class" rows = "5" cols = "40"></textarea></td>
               
            </tr>
            <tr>
                <td>Classes:</td>   
               <td><span class="error"><?php echo $errclasses; ?></span></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type ="radio" name ="gender" value ="female">Female
                  <input type ="radio" name ="gender" value ="male">Male
                  <span class ="error"><?php echo $errgender; ?></span>
               </td>
            </tr>
            
            <tr>
               <td>Select:</td>
               <td>
                  <select name ="subject[]" size ="4" multiple>
                     <option value="Android">Android</option>
                     <option value="Java">Java</option>
                     <option value="C#">C#</option>
                     <option value="Data Base">Data Base</option>
                     <option value="Hadoop">Hadoop</option>
                     <option value="VB script">VB script</option>
                  </select>
                
               </td>
            </tr>
            
            <tr>
                <td></td>
                <td><span class="error"> <?php echo $errsubject; ?></span></td>
            </tr>            
            <tr>
               <td>Agree</td>
               <td><input type ="checkbox" name ="checked" value ="1"/></td>
               
            </tr>
            <tr>
                <td></td>
                <td><span class="error"> <?php echo $errAgree; ?></span></td>
            </tr>
            <tr>
               <td>
                  <input type ="submit" name ="submit" value ="Submit"> 
               </td>
            </tr>
            
         </table>
         <?php
                if(isset($_POST['submit'])){
                    if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['time']) 
                        && !empty($_POST['class']) && !empty($_POST['gender']) && isset($_POST['checked'])){
                            echo ("<hr>");
                        echo "<h2>Your given values are as :</h2>";
                        echo ("<p><strong>Your name is:</strong> $name</p>");
                        echo ("<hr>");
                        echo ("<p><strong>your email address is:</strong> $email</p>");
                        echo ("<p><strong>Your class time at:</strong> $time</p>");
                        echo ("<hr>");
                        echo ("<p><strong>your class info:</strong> $class </p>");
                        echo ("<hr>");
                        echo ("<p><strong>your gender is</strong> $gender</p>");
                        
                        echo ("<p><strong>Cources</strong></p>");
                        echo ("<hr>");
                        for($i = 0; $i < count($subject); $i++) {
                            echo($subject[$i] . ",");
                        }
                    }
                }
                    
      ?>
      </form>
        <br><br>
      
</center>
</body>
</html> 
      