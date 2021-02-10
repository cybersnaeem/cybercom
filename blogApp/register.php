<?php

  require('./connection/conn.php');

  $conn = new Connection();

  require('./Controllers/users.php');

  $user = new Users();

  if(isset($_REQUEST['register'])){
      $user->register($_POST);
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Register here..</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="./register.php" method="post">
    <div class="container">
    <?php
      if(isset($_GET['reg_msg'])){

    ?>
      <div class="alert alert-danger mt-5" role="alert">
        <strong>
        <?php 
            echo $_GET['reg_msg']; 
            header('refresh:3;url=register.php');
        ?></strong>
      </div>
      <?php
          }
      ?>
        <div class="row pt-5">
            <div class="col-md-3 col-lg-3">
                
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card text-left">
                  <div class="card-body">
                    <h4 class="card-title text-center">Register</h4>
                    <p class="card-text">
                    <div class="form-group">
                          <label for="name">Prefix</label>
                          <select class="form-control" name="prefix" id="prefix" aria-describedby="helpId">
                            <option value="Choose Prefix" selected>Choose Prefix</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mr.">Miss.</option>
                            <option value="Mr.">Mrs.</option>
                          </select>
                          <small id="helpId" class="form-text text-muted">Enter Admin Name</small>
                        </div>
                        <div class="form-group">
                          <label for="name">First Name</label>
                          <input type="text"
                            class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="First Name" />
                          <small id="helpId" class="form-text text-muted">Enter First Name</small>
                        </div>
                        <div class="form-group">
                          <label for="name">Last Name</label>
                          <input type="text"
                            class="form-control" name="lname" id="lname" aria-describedby="helpId" placeholder="Last Name" />
                          <small id="helpId" class="form-text text-muted">Enter Last Name</small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"
                              class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email" 
                              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Error.." />
                            <small id="helpId" class="form-text text-muted">Enter Email</small>
                          </div>
                          <div class="form-group">
                          <label for="name">Mobile Number</label>
                          <input type="text"
                            class="form-control" name="contact" id="contact" aria-describedby="helpId" placeholder="Contact" maxlength="10" />
                          <small id="helpId" class="form-text text-muted">Enter Contact Number</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password"
                              class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password" />
                            <small id="helpId" class="form-text text-muted">Enter Password</small>
                          </div>
                          
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password"
                              class="form-control" name="cpassword" id="cpassword" aria-describedby="helpId" placeholder="Confirm Password" />
                            <small id="helpId" class="form-text text-muted">Enter Confirm Password</small>
                          </div>
                          
                        <div class="form-group">
                            <label for="password">Information</label>
                            <textarea 
                              class="form-control" name="information" id="information" aia-describedby="helpId" placeholder="Information">
                              </textarea>
                            <small id="helpId" class="form-text text-muted">Information</small>
                          </div>
                          <div class="form-group text-center">
                            <input type="checkbox" name="terms" id="terms">
                            Hereby, I Accept Terms & Conditions.
                          </div>

                          <hr>
                          <p class="text-center"><a href="./index.php">Already Have Account</a></p>
                          
                        <div class="form-group pb-4">
                            <button type="submit" name="register"  class="btn btn-warning  btn-block" id="btnReg">Register Now</button>    
                        </div>
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">

            </div>
        </div>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>