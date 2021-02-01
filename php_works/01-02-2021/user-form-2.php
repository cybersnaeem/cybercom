<?php
if(isset($_REQUEST['add'])){
    $name = $_POST['uname'];
    $pass =$_POST['upass'];
    $add = $_POST['uadd'];   
    $gender = $_POST['gender'];
    $day = $_POST['uday'];
    $month = $_POST['umonth'];
    $year = $_POST['uyear'];
    $game = $_POST['game'];
    $status = $_POST['mstatus'];
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>User Form 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form  name="myForm" action="./user-form-2.php"  method="post" required>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3">
        
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card text-left">
              <div class="card-body">
              <h2 class="text-center">User Form</h2>
                  <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="uname" id="uname" aria-describedby="emailHelpId" placeholder="Enter Username">
                    <small id="emailHelpId" class="form-text text-muted">Enter Name</small>
                  </div>
                  <div class="form-group">
                    <label for="">Enter Password</label>
                    <input type="password" class="form-control" name="upass" id="upass" aria-describedby="emailHelpId" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    placeholder="Enter Password">
                    <small id="emailHelpId" class="form-text text-muted">Enter Password</small>
                  </div>
                  
                  <div class="form-group">
                    <label for="">Gender:</label><br>
                    <input type="radio" name="gender" value="Male">  Male 
                    <input type="radio" name="gender" value="Female">  Female 
                    
                    <small id="emailHelpId" class="form-text text-muted">Select Gender</small>
                  </div>
                  <div class="form-group">
                    <label for="">Address</label>
                    <textarea class="form-control" name="uadd" id="uadd" aria-describedby="emailHelpId" placeholder="Enter Address"></textarea>
                    <small id="emailHelpId" class="form-text text-muted">Enter Password</small>
                  </div>
                  <div class="form-group">
                  <label for="">Date Of Birth</label>
                    <div class="row">
                        <div class="col-md-4">
                            <select name="umonth" id="umonth" class="form-control">
                                <option value="Month" selected>Month</option> 
                                <option value="JAN">JAN</option>
                                <option value="FEB">FEB</option>
                                <option value="MAR">MAR</option>
                                <option value="APR">APR</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="uday" id="uday" class="form-control">
                                <option value="Day" selected>Day</option> 
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="uyear" id="uyear" class="form-control">
                                <option value="Year" selected>Year</option> 
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <legend>Select Game:</legend>
                      <input type="checkbox" name="game[]" value="Hockey">  Hockey <br>
                      <input type="checkbox" name="game[]" value="Football">  Football <br>
                      <input type="checkbox" name="game[]" value="Cricket">  Cricket<br>
                      <input type="checkbox" name="game[]" value="VolleyBall">  VolleyBall<br>
                    </fieldset>
                  </div>
                  
                  <div class="form-group">
                    <label for="">Marital Status:</label><br>
                    <input type="radio" name="mstatus" value="Married">  Married 
                    <input type="radio" name="mstatus" value="Unmarried">  Unmarried 
                    
                    <small id="emailHelpId" class="form-text text-muted">Select Marital Status</small>
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" id="agreement" name="agreement">  I Accept This Agreement.
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" onclick="formValidation()" name="add" class="btn btn-primary ml-5 pl-5 pr-5">Submit</button>
                    <button type="reset" class="btn btn-danger ml-5 pl-5 pr-5">Reset</button>
                  </div>
                  
              </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3">
        
        </div>
      </div>
      <div class="jumbotron">
      <?php 
        if(isset($_REQUEST['add'])){
       ?>   
        <p class="lead">Name : <?php echo $name ?></p>
        <p class="lead">Password : <?php echo $pass ?></p>
        <p class="lead">Address : <?php echo $add ?></p>
        <p class="lead">Gender : <?php echo $gender ?></p>
        <p class="lead">Date Of Birth : <?php echo $day.'/', $month.'/', $year ?></p>
        <p class="lead">Games : <?php  
                foreach($game as $data){
                echo $data.",";
                }
        ?></p>
        <p class="lead">Marital Status : <?php echo $status ?></p>
        <?php
        }
        ?>
      </div>
    </div>

    </form>      
    <script src="./js/user-form-2.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>